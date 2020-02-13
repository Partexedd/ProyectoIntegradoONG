<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200213081214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, usuario VARCHAR(100) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contactar (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, email VARCHAR(255) NOT NULL, rss_provincia VARCHAR(30) NOT NULL, representa VARCHAR(30) NOT NULL, asunto VARCHAR(100) DEFAULT NULL, mensaje LONGTEXT NOT NULL, fecha DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ent_detalle (id INT AUTO_INCREMENT NOT NULL, ent_img VARCHAR(255) DEFAULT NULL, ent_tlf VARCHAR(255) DEFAULT NULL, ent_mail VARCHAR(50) DEFAULT NULL, ent_iframe VARCHAR(255) DEFAULT NULL, ent_nombre VARCHAR(75) DEFAULT NULL, ent_text LONGTEXT DEFAULT NULL, ent_facebook VARCHAR(255) DEFAULT NULL, ent_twitter VARCHAR(255) DEFAULT NULL, ent_instagram VARCHAR(255) DEFAULT NULL, ent_youtube VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_contacto (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_entidades (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, ent_img VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_forma_parte (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_inicio (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, tit_pagina VARCHAR(255) DEFAULT NULL, des_pagina VARCHAR(255) DEFAULT NULL, imagen_pagina VARCHAR(50) DEFAULT NULL, video_conocenos VARCHAR(100) DEFAULT NULL, pdf_suplemento VARCHAR(150) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_jornadas_formativas (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, jornada_activa TINYINT(1) NOT NULL, jornada_tit VARCHAR(75) DEFAULT NULL, jornada_text LONGTEXT DEFAULT NULL, jornada_img VARCHAR(255) DEFAULT NULL, jornada_cartel VARCHAR(255) DEFAULT NULL, j_alicante VARCHAR(255) DEFAULT NULL, j_valencia VARCHAR(255) DEFAULT NULL, j_castellon VARCHAR(255) DEFAULT NULL, text_debajo_jornada VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_mirant (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, edicion VARCHAR(4) DEFAULT NULL, titulo_mirant_cab VARCHAR(255) DEFAULT NULL, desc_mirant_cab LONGTEXT DEFAULT NULL, img_mirant_cab VARCHAR(255) DEFAULT NULL, spot_mirant VARCHAR(100) DEFAULT NULL, pel_titulo VARCHAR(100) DEFAULT NULL, pel_trailer VARCHAR(100) DEFAULT NULL, pel_img VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_nuestra_propuesta (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE contactar');
        $this->addSql('DROP TABLE ent_detalle');
        $this->addSql('DROP TABLE pag_contacto');
        $this->addSql('DROP TABLE pag_entidades');
        $this->addSql('DROP TABLE pag_forma_parte');
        $this->addSql('DROP TABLE pag_inicio');
        $this->addSql('DROP TABLE pag_jornadas_formativas');
        $this->addSql('DROP TABLE pag_mirant');
        $this->addSql('DROP TABLE pag_nuestra_propuesta');
    }
}
