<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240823193103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE direccion (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, direccion VARCHAR(70) DEFAULT NULL, localidad VARCHAR(70) DEFAULT NULL, ciudad VARCHAR(70) DEFAULT NULL)');
        $this->addSql('CREATE TABLE libro (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titulo VARCHAR(50) DEFAULT NULL, autor VARCHAR(50) DEFAULT NULL, publicado DATE DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE libro_usuario (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, usuario_id INTEGER DEFAULT NULL, libro_id INTEGER NOT NULL, prestamo DATE DEFAULT NULL, devolucion DATE DEFAULT NULL, CONSTRAINT FK_6417C9DEDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_6417C9DEC0238522 FOREIGN KEY (libro_id) REFERENCES libro (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6417C9DEDB38439E ON libro_usuario (usuario_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6417C9DEC0238522 ON libro_usuario (libro_id)');
        $this->addSql('CREATE TABLE reseña (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, usuario_id INTEGER NOT NULL, libro_id INTEGER NOT NULL, contenido CLOB DEFAULT NULL, publicado DATE DEFAULT NULL, CONSTRAINT FK_58AAFB95DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_58AAFB95C0238522 FOREIGN KEY (libro_id) REFERENCES libro (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_58AAFB95DB38439E ON reseña (usuario_id)');
        $this->addSql('CREATE INDEX IDX_58AAFB95C0238522 ON reseña (libro_id)');
        $this->addSql('CREATE TABLE usuario (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, direccion_id INTEGER NOT NULL, nombre VARCHAR(50) DEFAULT NULL, apellido VARCHAR(50) DEFAULT NULL, correo VARCHAR(70) DEFAULT NULL, CONSTRAINT FK_2265B05DD0A7BD7 FOREIGN KEY (direccion_id) REFERENCES direccion (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2265B05DD0A7BD7 ON usuario (direccion_id)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE direccion');
        $this->addSql('DROP TABLE libro');
        $this->addSql('DROP TABLE libro_usuario');
        $this->addSql('DROP TABLE reseña');
        $this->addSql('DROP TABLE usuario');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
