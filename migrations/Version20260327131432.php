<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260327131432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP CONSTRAINT pokemon_pkey');
        $this->addSql('ALTER TABLE pokemon ADD pkm_type VARCHAR(160) NOT NULL');
        $this->addSql('ALTER TABLE pokemon RENAME COLUMN id TO pkm_id');
        $this->addSql('ALTER TABLE pokemon RENAME COLUMN name TO pkm_name');
        $this->addSql('ALTER TABLE pokemon ADD PRIMARY KEY (pkm_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP CONSTRAINT pokemon_pkey');
        $this->addSql('ALTER TABLE pokemon ADD name VARCHAR(160) NOT NULL');
        $this->addSql('ALTER TABLE pokemon DROP pkm_name');
        $this->addSql('ALTER TABLE pokemon DROP pkm_type');
        $this->addSql('ALTER TABLE pokemon RENAME COLUMN pkm_id TO id');
        $this->addSql('ALTER TABLE pokemon ADD PRIMARY KEY (id)');
    }
}
