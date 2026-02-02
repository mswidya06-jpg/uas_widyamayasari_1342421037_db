<?php

namespace App\Filament\Resources\Mahasiswas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MahasiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama_lengkap')
                ->required()
                ->maxLength(255),
            TextInput::make('nomor_induk_mahasiswa')
                ->label('NIM')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(20),
            TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            TextInput::make('nomor_telepon')
                ->tel()
                ->required(),
            DatePicker::make('tanggal_lahir')
                ->required(),
            Select::make('jenis_kelamin')
                ->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ])
                ->required(),
            TextInput::make('angkatan_mahasiswa')
                ->numeric()
                ->placeholder('Contoh: 2023')
                ->required(),
            TextInput::make('hobby')
                ->label('Hobi'),
            FileUpload::make('foto')
                ->image()
                ->directory('mahasiswa-foto')
                ->imageEditor()
                ->columnSpanFull(),
        ]);
    }
}
