<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191119185529 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonne CHANGE ID_Client ID_Client INT DEFAULT NULL');
        $this->addSql('ALTER TABLE administrateur CHANGE ID_Employer ID_Employer INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carte_abonnement CHANGE ID_Abonne ID_Abonne INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE ID_Carte_Bancaire ID_Carte_Bancaire INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dvd CHANGE ID_Filme ID_Filme INT DEFAULT NULL, CHANGE ID_AL2000 ID_AL2000 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE location CHANGE ID_Client ID_Client INT DEFAULT NULL, CHANGE ID_DVD ID_DVD INT DEFAULT NULL');
        $this->addSql('ALTER TABLE technicien CHANGE ID_Employer ID_Employer INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonne CHANGE ID_Client ID_Client INT NOT NULL');
        $this->addSql('ALTER TABLE administrateur CHANGE ID_Employer ID_Employer INT NOT NULL');
        $this->addSql('ALTER TABLE carte_abonnement CHANGE ID_Abonne ID_Abonne INT NOT NULL');
        $this->addSql('ALTER TABLE client CHANGE ID_Carte_Bancaire ID_Carte_Bancaire INT NOT NULL');
        $this->addSql('ALTER TABLE dvd CHANGE ID_Filme ID_Filme INT NOT NULL, CHANGE ID_AL2000 ID_AL2000 INT NOT NULL');
        $this->addSql('ALTER TABLE location CHANGE ID_Client ID_Client INT NOT NULL, CHANGE ID_DVD ID_DVD INT NOT NULL');
        $this->addSql('ALTER TABLE technicien CHANGE ID_Employer ID_Employer INT NOT NULL');
    }
}
