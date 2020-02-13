<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200213112429 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pag_mirant DROP FOREIGN KEY FK_55157B41D651B81E');
        $this->addSql('DROP INDEX IDX_55157B41D651B81E ON pag_mirant');
        $this->addSql('ALTER TABLE pag_mirant DROP edicion_id, CHANGE introduccion_id introduccion_id INT DEFAULT NULL, CHANGE video_mirant video_mirant VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE peliculas_mirant ADD edicion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE peliculas_mirant ADD CONSTRAINT FK_CE6FC05FD651B81E FOREIGN KEY (edicion_id) REFERENCES pag_mirant (id)');
        $this->addSql('CREATE INDEX IDX_CE6FC05FD651B81E ON peliculas_mirant (edicion_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pag_mirant ADD edicion_id INT NOT NULL, CHANGE introduccion_id introduccion_id INT NOT NULL, CHANGE video_mirant video_mirant VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE pag_mirant ADD CONSTRAINT FK_55157B41D651B81E FOREIGN KEY (edicion_id) REFERENCES peliculas_mirant (id)');
        $this->addSql('CREATE INDEX IDX_55157B41D651B81E ON pag_mirant (edicion_id)');
        $this->addSql('ALTER TABLE peliculas_mirant DROP FOREIGN KEY FK_CE6FC05FD651B81E');
        $this->addSql('DROP INDEX IDX_CE6FC05FD651B81E ON peliculas_mirant');
        $this->addSql('ALTER TABLE peliculas_mirant DROP edicion_id');
    }
}
