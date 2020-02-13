<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200213133337 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE peliculas_mirant (id INT AUTO_INCREMENT NOT NULL, edicion_id INT DEFAULT NULL, titulo VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, trailer VARCHAR(255) NOT NULL, INDEX IDX_CE6FC05FD651B81E (edicion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carteles_jornadas (id INT AUTO_INCREMENT NOT NULL, img_valencia VARCHAR(255) DEFAULT NULL, img_alicante VARCHAR(255) DEFAULT NULL, img_castellon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entidades (id INT AUTO_INCREMENT NOT NULL, logo VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, telefono VARCHAR(100) NOT NULL, correo VARCHAR(100) DEFAULT NULL, localizacion VARCHAR(255) DEFAULT NULL, descripcion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fechas_jornadas (id INT AUTO_INCREMENT NOT NULL, valencia VARCHAR(255) NOT NULL, alicante VARCHAR(255) NOT NULL, castellon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE introduccion_mirant (id INT AUTO_INCREMENT NOT NULL, edicion VARCHAR(255) NOT NULL, titulo VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, cartel_mirant VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paginas_ong (id INT AUTO_INCREMENT NOT NULL, nombre_pagina VARCHAR(100) NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_jornadas (id INT AUTO_INCREMENT NOT NULL, tit_cabecera_id INT DEFAULT NULL, fechas_jornadas_id INT DEFAULT NULL, carteles_jornadas_id INT DEFAULT NULL, formulario_ins VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7586F3AE2BB870DE (tit_cabecera_id), UNIQUE INDEX UNIQ_7586F3AEBF058448 (fechas_jornadas_id), UNIQUE INDEX UNIQ_7586F3AE9EB52D87 (carteles_jornadas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_propuesta (id INT AUTO_INCREMENT NOT NULL, tit_cabecera_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_451673512BB870DE (tit_cabecera_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ponente_jornada (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, img VARCHAR(100) NOT NULL, descripcion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spot_inicio (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, subtitulo VARCHAR(255) DEFAULT NULL, img VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE peliculas_mirant ADD CONSTRAINT FK_CE6FC05FD651B81E FOREIGN KEY (edicion_id) REFERENCES pag_mirant (id)');
        $this->addSql('ALTER TABLE pag_jornadas ADD CONSTRAINT FK_7586F3AE2BB870DE FOREIGN KEY (tit_cabecera_id) REFERENCES paginas_ong (id)');
        $this->addSql('ALTER TABLE pag_jornadas ADD CONSTRAINT FK_7586F3AEBF058448 FOREIGN KEY (fechas_jornadas_id) REFERENCES fechas_jornadas (id)');
        $this->addSql('ALTER TABLE pag_jornadas ADD CONSTRAINT FK_7586F3AE9EB52D87 FOREIGN KEY (carteles_jornadas_id) REFERENCES carteles_jornadas (id)');
        $this->addSql('ALTER TABLE pag_propuesta ADD CONSTRAINT FK_451673512BB870DE FOREIGN KEY (tit_cabecera_id) REFERENCES paginas_ong (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pag_jornadas DROP FOREIGN KEY FK_7586F3AE9EB52D87');
        $this->addSql('ALTER TABLE pag_jornadas DROP FOREIGN KEY FK_7586F3AEBF058448');
        $this->addSql('ALTER TABLE pag_jornadas DROP FOREIGN KEY FK_7586F3AE2BB870DE');
        $this->addSql('ALTER TABLE pag_propuesta DROP FOREIGN KEY FK_451673512BB870DE');
        $this->addSql('DROP TABLE peliculas_mirant');
        $this->addSql('DROP TABLE carteles_jornadas');
        $this->addSql('DROP TABLE entidades');
        $this->addSql('DROP TABLE fechas_jornadas');
        $this->addSql('DROP TABLE introduccion_mirant');
        $this->addSql('DROP TABLE paginas_ong');
        $this->addSql('DROP TABLE pag_jornadas');
        $this->addSql('DROP TABLE pag_propuesta');
        $this->addSql('DROP TABLE ponente_jornada');
        $this->addSql('DROP TABLE spot_inicio');
    }
}
