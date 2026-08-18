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
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Builder;

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
                Forms\Components\Card::make()->schema([
                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required()
                        ->label('Categoria'),

                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->label('Título do Artigo')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->label('Slug (URL)'),

                    Forms\Components\Textarea::make('excerpt')
                        ->rows(3)
                        ->label('Resumo (Excerpt)'),

                    Forms\Components\TextInput::make('meta_description')
                        ->maxLength(160)
                        ->label('Meta Description (SEO)')
                        ->helperText('Máximo de 160 caracteres. Resumo do artigo exibido no Google.'),

                    Forms\Components\Select::make('status')
                        ->options([
                            'draft' => 'Rascunho',
                            'published' => 'Publicado',
                        ])
                        ->default('draft')
                        ->required()
                        ->label('Status'),

                    Forms\Components\DateTimePicker::make('published_at')
                        ->label('Data de Publicação')
                        ->default(now()),

                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->directory('posts')
                        ->label('Imagem de Capa')
                        ->imageEditor()
                        ->columnSpanFull(),

                    Forms\Components\Builder::make('content')
                        ->label('Conteúdo do Artigo')
                        ->blocks([
                            
                            Forms\Components\Builder\Block::make('text')
                                ->label('Texto (Rich Text)')
                                ->icon('heroicon-o-document-text')
                                ->schema([
                                    Forms\Components\RichEditor::make('content')
                                        ->label('Conteúdo')
                                        ->required(),
                                ]),

                            Forms\Components\Builder\Block::make('affiliate_product')
                                ->label('Produto Afiliado')
                                ->icon('heroicon-o-shopping-cart')
                                ->schema([
                                    Forms\Components\TextInput::make('title')
                                        ->label('Nome do Produto')
                                        ->placeholder('Ex: Echo Dot 5')
                                        ->required(),

                                    Forms\Components\Textarea::make('description')
                                        ->label('Descrição curta')
                                        ->rows(2),

                                    Forms\Components\TextInput::make('image')
                                        ->label('URL da Imagem do Produto')
                                        ->url()
                                        ->required(),

                                    Forms\Components\TextInput::make('link')
                                        ->label('Link de Afiliado')
                                        ->url()
                                        ->required(),

                                    Forms\Components\TextInput::make('price')
                                        ->label('Preço do Produto')
                                        ->required(),

                                    Forms\Components\Select::make('store')
                                        ->options([
                                            'amazon' => 'Amazon',
                                            'mercadolivre' => 'Mercado Livre',
                                            'outro' => 'Outra Loja',
                                        ])
                                        ->default('amazon')
                                        ->required(),
                                ]),
                        ])
                        ->columnSpanFull()
                        ->collapsible(),
                ])->columnSpanFull()->collapsible(),
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
