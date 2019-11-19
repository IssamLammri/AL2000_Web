<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191119220025 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Acteur_Filme (idActeur INT NOT NULL, idFilm INT NOT NULL, INDEX IDX_AF376F0D89EB7BF8 (idActeur), INDEX IDX_AF376F0DF1B9E0BC (idFilm), PRIMARY KEY(idActeur, idFilm)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Interdité_Genre (idCarteAbonnement INT NOT NULL, idGenre INT NOT NULL, INDEX IDX_A75C7BECB93AD616 (idCarteAbonnement), INDEX IDX_A75C7BEC949470E5 (idGenre), PRIMARY KEY(idCarteAbonnement, idGenre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Acteur_Filme ADD CONSTRAINT FK_AF376F0D89EB7BF8 FOREIGN KEY (idActeur) REFERENCES acteur (ID_Acteur)');
        $this->addSql('ALTER TABLE Acteur_Filme ADD CONSTRAINT FK_AF376F0DF1B9E0BC FOREIGN KEY (idFilm) REFERENCES film (ID_Film)');
        $this->addSql('ALTER TABLE Interdité_Genre ADD CONSTRAINT FK_A75C7BECB93AD616 FOREIGN KEY (idCarteAbonnement) REFERENCES carte_abonnement (ID_Carte_Abonne)');
        $this->addSql('ALTER TABLE Interdité_Genre ADD CONSTRAINT FK_A75C7BEC949470E5 FOREIGN KEY (idGenre) REFERENCES genre (ID_Genre)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Acteur_Filme');
        $this->addSql('DROP TABLE Interdité_Genre');
    }
}
