<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Conteúdo';
    protected static ?string $modelLabel = 'Artigo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required()
                        ->label('Categoria'),

                    TextInput::make('title')
                        ->required()
                        ->label('Título do Artigo')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->required()
                        ->label('Slug (URL)'),

                    Textarea::make('excerpt')
                        ->rows(3)
                        ->label('Resumo (Excerpt)'),

                    TextInput::make('meta_description')
                        ->maxLength(160)
                        ->label('Meta Description (SEO)')
                        ->helperText('Máximo de 160 caracteres. Resumo artigo Google.'),

                    RichEditor::make('content')
                        ->required()
                        ->columnSpanFull()
                        ->label('Conteúdo do Artigo'),

                    Select::make('status')
                        ->options([
                            'draft' => 'Rascunho',
                            'published' => 'Publicado',
                        ])
                        ->default('draft')
                        ->required()
                        ->label('Status'),
                    FileUpload::make('image')
                        ->image()
                        ->directory('posts')
                        ->label('Imagem de Capa')
                        ->imageEditor()
                        ->columnSpanFull(),

                    DateTimePicker::make('published_at')
                        ->label('Data de Publicação')
                        ->default(now()),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Título'),

                TextColumn::make('category.name')
                    ->sortable()
                    ->label('Categoria'),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'draft',
                        'success' => 'published',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'draft' => 'Rascunho',
                        'published' => 'Publicado',
                    }),
                ImageColumn::make('image')
                    ->label('Capa')
                    ->square(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->label('Publicado em'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Rascunho',
                        'published' => 'Publicado',
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
