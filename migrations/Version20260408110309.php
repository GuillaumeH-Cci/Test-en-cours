<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260408110309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE pokemons ADD pkm_created_by INT DEFAULT NULL');
        $this->addSql('UPDATE pokemons SET pkm_created_by = 1 WHERE pkm_created_by IS NULL');
        $this->addSql('ALTER TABLE pokemons ALTER COLUMN pkm_created_by SET NOT NULL');
        $this->addSql('ALTER TABLE pokemons ADD CONSTRAINT FK_3FD8B03DB2CD285B FOREIGN KEY (pkm_created_by) REFERENCES "users" (usr_id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_3FD8B03DB2CD285B ON pokemons (pkm_created_by)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemons DROP CONSTRAINT FK_3FD8B03DB2CD285B');
        $this->addSql('DROP INDEX IDX_3FD8B03DB2CD285B');
        $this->addSql('ALTER TABLE pokemons DROP pkm_created_by');
    }
}
