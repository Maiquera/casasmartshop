<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationGroup = 'Afiliados';
    protected static ?string $modelLabel = 'Produto Afiliado';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\Select::make('post_id')
                        ->relationship('post', 'title')
                        ->required()
                        ->label('Vincular ao Artigo'),

                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->label('Nome do Produto'),

                    Forms\Components\TextInput::make('brand')
                        ->label('Marca / Fabricante'),

                    Forms\Components\TextInput::make('price')
                        ->numeric()
                        ->prefix('R$')
                        ->label('Preço'),

                    Forms\Components\TextInput::make('affiliate_link')
                        ->url()
                        ->required()
                        ->columnSpanFull()
                        ->label('Link de Afiliado (Amazon)'),

                    Forms\Components\Toggle::make('is_featured')
                        ->label('Destaque ("Melhor Escolha")')
                        ->default(false),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Produto'),

                Tables\Columns\TextColumn::make('post.title')
                    ->limit(30)
                    ->label('Artigo Vinculado'),

                Tables\Columns\TextColumn::make('price')
                    ->money('BRL')
                    ->label('Preço'),

                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean()
                    ->label('Destaque'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}