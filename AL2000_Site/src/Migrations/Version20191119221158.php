<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191119221158 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Filmes_Genre (ID_Genre INT NOT NULL, ID_Film INT NOT NULL, INDEX IDX_D505CB659ADF0606 (ID_Genre), INDEX IDX_D505CB65614731B4 (ID_Film), PRIMARY KEY(ID_Genre, ID_Film)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Filmes_Genre ADD CONSTRAINT FK_D505CB659ADF0606 FOREIGN KEY (ID_Genre) REFERENCES genre (ID_Genre)');
        $this->addSql('ALTER TABLE Filmes_Genre ADD CONSTRAINT FK_D505CB65614731B4 FOREIGN KEY (ID_Film) REFERENCES film (ID_Film)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Filmes_Genre');
    }
}
