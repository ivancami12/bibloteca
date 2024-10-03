<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003144315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__libro AS SELECT id, titulo, autor, publicado, imagen FROM libro');
        $this->addSql('DROP TABLE libro');
        $this->addSql('CREATE TABLE libro (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titulo VARCHAR(50) DEFAULT NULL, autor VARCHAR(50) DEFAULT NULL, publicado VARCHAR(255) DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL, detalle VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO libro (id, titulo, autor, publicado, imagen) SELECT id, titulo, autor, publicado, imagen FROM __temp__libro');
        $this->addSql('DROP TABLE __temp__libro');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__libro AS SELECT id, titulo, autor, publicado, imagen FROM libro');
        $this->addSql('DROP TABLE libro');
        $this->addSql('CREATE TABLE libro (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titulo VARCHAR(50) DEFAULT NULL, autor VARCHAR(50) DEFAULT NULL, publicado DATE DEFAULT NULL, imagen VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO libro (id, titulo, autor, publicado, imagen) SELECT id, titulo, autor, publicado, imagen FROM __temp__libro');
        $this->addSql('DROP TABLE __temp__libro');
    }
}
