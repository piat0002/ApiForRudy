<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210906161028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE date (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
        $this->addSql('CREATE TABLE halfday (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, plat_id INTEGER DEFAULT NULL, day VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_BEF3C312D73DB560 ON halfday (plat_id)');
        $this->addSql('CREATE TABLE ingredient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, rayon VARCHAR(255) NOT NULL, price DOUBLE PRECISION DEFAULT NULL, saisons CLOB NOT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TABLE plat (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, day VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE plat_ingredient (plat_id INTEGER NOT NULL, ingredient_id INTEGER NOT NULL, PRIMARY KEY(plat_id, ingredient_id))');
        $this->addSql('CREATE INDEX IDX_E0ED47FBD73DB560 ON plat_ingredient (plat_id)');
        $this->addSql('CREATE INDEX IDX_E0ED47FB933FE08C ON plat_ingredient (ingredient_id)');
        $this->addSql('CREATE TABLE week (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, date DATE NOT NULL)');
        $this->addSql('CREATE TABLE week_halfday (week_id INTEGER NOT NULL, halfday_id INTEGER NOT NULL, PRIMARY KEY(week_id, halfday_id))');
        $this->addSql('CREATE INDEX IDX_4CE5B925C86F3B2F ON week_halfday (week_id)');
        $this->addSql('CREATE INDEX IDX_4CE5B925BD8095BB ON week_halfday (halfday_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE date');
        $this->addSql('DROP TABLE halfday');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE plat');
        $this->addSql('DROP TABLE plat_ingredient');
        $this->addSql('DROP TABLE week');
        $this->addSql('DROP TABLE week_halfday');
    }
}
