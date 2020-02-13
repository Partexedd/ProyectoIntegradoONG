<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200213100430 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE carteles_jornadas (id INT AUTO_INCREMENT NOT NULL, img_valencia VARCHAR(255) DEFAULT NULL, img_alicante VARCHAR(255) DEFAULT NULL, img_castellon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entidades (id INT AUTO_INCREMENT NOT NULL, logo VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, telefono VARCHAR(100) NOT NULL, correo VARCHAR(100) DEFAULT NULL, localizacion VARCHAR(255) DEFAULT NULL, descripcion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fechas_jornadas (id INT AUTO_INCREMENT NOT NULL, valencia VARCHAR(255) NOT NULL, alicante VARCHAR(255) NOT NULL, castellon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE introduccion_mirant (id INT AUTO_INCREMENT NOT NULL, edicion VARCHAR(255) NOT NULL, titulo VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, cartel_mirant VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paginas_ong (id INT AUTO_INCREMENT NOT NULL, nombre_pagina VARCHAR(100) NOT NULL, tit_cabecera VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_jornadas (id INT AUTO_INCREMENT NOT NULL, tit_cabecera_id INT DEFAULT NULL, fechas_jornadas_id INT DEFAULT NULL, carteles_jornadas_id INT DEFAULT NULL, formulario_ins VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7586F3AE2BB870DE (tit_cabecera_id), UNIQUE INDEX UNIQ_7586F3AEBF058448 (fechas_jornadas_id), UNIQUE INDEX UNIQ_7586F3AE9EB52D87 (carteles_jornadas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pag_propuesta (id INT AUTO_INCREMENT NOT NULL, tit_cabecera_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_451673512BB870DE (tit_cabecera_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE peliculas_mirant (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, trailer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ponente_jornada (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, img VARCHAR(100) NOT NULL, descripcion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spot_inicio (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, subtitulo VARCHAR(255) DEFAULT NULL, img VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pag_jornadas ADD CONSTRAINT FK_7586F3AE2BB870DE FOREIGN KEY (tit_cabecera_id) REFERENCES paginas_ong (id)');
        $this->addSql('ALTER TABLE pag_jornadas ADD CONSTRAINT FK_7586F3AEBF058448 FOREIGN KEY (fechas_jornadas_id) REFERENCES fechas_jornadas (id)');
        $this->addSql('ALTER TABLE pag_jornadas ADD CONSTRAINT FK_7586F3AE9EB52D87 FOREIGN KEY (carteles_jornadas_id) REFERENCES carteles_jornadas (id)');
        $this->addSql('ALTER TABLE pag_propuesta ADD CONSTRAINT FK_451673512BB870DE FOREIGN KEY (tit_cabecera_id) REFERENCES paginas_ong (id)');
        $this->addSql('DROP TABLE ent_detalle');
        $this->addSql('DROP TABLE pag_contacto');
        $this->addSql('DROP TABLE pag_entidades');
        $this->addSql('DROP TABLE pag_forma_parte');
        $this->addSql('DROP TABLE pag_jornadas_formativas');
        $this->addSql('DROP TABLE pag_nuestra_propuesta');
        $this->addSql('ALTER TABLE pag_inicio ADD tit_cabecera_id INT DEFAULT NULL, ADD spot_id INT DEFAULT NULL, ADD link_suplemento_pdf VARCHAR(255) NOT NULL, DROP tit_cabecera, DROP tit_pagina, DROP des_pagina, DROP imagen_pagina, DROP pdf_suplemento, CHANGE video_conocenos video_conocenos VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE pag_inicio ADD CONSTRAINT FK_3D1CBE9C2BB870DE FOREIGN KEY (tit_cabecera_id) REFERENCES paginas_ong (id)');
        $this->addSql('ALTER TABLE pag_inicio ADD CONSTRAINT FK_3D1CBE9C2DF1D37C FOREIGN KEY (spot_id) REFERENCES spot_inicio (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3D1CBE9C2BB870DE ON pag_inicio (tit_cabecera_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3D1CBE9C2DF1D37C ON pag_inicio (spot_id)');
        $this->addSql('ALTER TABLE pag_mirant ADD tit_cabecera_id INT DEFAULT NULL, ADD edicion_id INT NOT NULL, ADD introduccion_id INT NOT NULL, ADD video_mirant VARCHAR(255) DEFAULT NULL, DROP tit_cabecera, DROP edicion, DROP titulo_mirant_cab, DROP desc_mirant_cab, DROP img_mirant_cab, DROP spot_mirant, DROP pel_titulo, DROP pel_trailer, DROP pel_img');
        $this->addSql('ALTER TABLE pag_mirant ADD CONSTRAINT FK_55157B412BB870DE FOREIGN KEY (tit_cabecera_id) REFERENCES paginas_ong (id)');
        $this->addSql('ALTER TABLE pag_mirant ADD CONSTRAINT FK_55157B41D651B81E FOREIGN KEY (edicion_id) REFERENCES peliculas_mirant (id)');
        $this->addSql('ALTER TABLE pag_mirant ADD CONSTRAINT FK_55157B4125AB11E9 FOREIGN KEY (introduccion_id) REFERENCES introduccion_mirant (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_55157B412BB870DE ON pag_mirant (tit_cabecera_id)');
        $this->addSql('CREATE INDEX IDX_55157B41D651B81E ON pag_mirant (edicion_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_55157B4125AB11E9 ON pag_mirant (introduccion_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pag_jornadas DROP FOREIGN KEY FK_7586F3AE9EB52D87');
        $this->addSql('ALTER TABLE pag_jornadas DROP FOREIGN KEY FK_7586F3AEBF058448');
        $this->addSql('ALTER TABLE pag_mirant DROP FOREIGN KEY FK_55157B4125AB11E9');
        $this->addSql('ALTER TABLE pag_inicio DROP FOREIGN KEY FK_3D1CBE9C2BB870DE');
        $this->addSql('ALTER TABLE pag_jornadas DROP FOREIGN KEY FK_7586F3AE2BB870DE');
        $this->addSql('ALTER TABLE pag_mirant DROP FOREIGN KEY FK_55157B412BB870DE');
        $this->addSql('ALTER TABLE pag_propuesta DROP FOREIGN KEY FK_451673512BB870DE');
        $this->addSql('ALTER TABLE pag_mirant DROP FOREIGN KEY FK_55157B41D651B81E');
        $this->addSql('ALTER TABLE pag_inicio DROP FOREIGN KEY FK_3D1CBE9C2DF1D37C');
        $this->addSql('CREATE TABLE ent_detalle (id INT AUTO_INCREMENT NOT NULL, ent_img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_tlf VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_mail VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_iframe VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_nombre VARCHAR(75) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_text LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_facebook VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_twitter VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_instagram VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_youtube VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pag_contacto (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pag_entidades (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ent_img VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pag_forma_parte (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pag_jornadas_formativas (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, jornada_activa TINYINT(1) NOT NULL, jornada_tit VARCHAR(75) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, jornada_text LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, jornada_img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, jornada_cartel VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, j_alicante VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, j_valencia VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, j_castellon VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, text_debajo_jornada VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pag_nuestra_propuesta (id INT AUTO_INCREMENT NOT NULL, tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE carteles_jornadas');
        $this->addSql('DROP TABLE entidades');
        $this->addSql('DROP TABLE fechas_jornadas');
        $this->addSql('DROP TABLE introduccion_mirant');
        $this->addSql('DROP TABLE paginas_ong');
        $this->addSql('DROP TABLE pag_jornadas');
        $this->addSql('DROP TABLE pag_propuesta');
        $this->addSql('DROP TABLE peliculas_mirant');
        $this->addSql('DROP TABLE ponente_jornada');
        $this->addSql('DROP TABLE spot_inicio');
        $this->addSql('DROP INDEX UNIQ_3D1CBE9C2BB870DE ON pag_inicio');
        $this->addSql('DROP INDEX UNIQ_3D1CBE9C2DF1D37C ON pag_inicio');
        $this->addSql('ALTER TABLE pag_inicio ADD tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD tit_pagina VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD des_pagina VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD imagen_pagina VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD pdf_suplemento VARCHAR(150) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP tit_cabecera_id, DROP spot_id, DROP link_suplemento_pdf, CHANGE video_conocenos video_conocenos VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_55157B412BB870DE ON pag_mirant');
        $this->addSql('DROP INDEX IDX_55157B41D651B81E ON pag_mirant');
        $this->addSql('DROP INDEX UNIQ_55157B4125AB11E9 ON pag_mirant');
        $this->addSql('ALTER TABLE pag_mirant ADD edicion VARCHAR(4) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD titulo_mirant_cab VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD desc_mirant_cab LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD img_mirant_cab VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD spot_mirant VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD pel_titulo VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD pel_trailer VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD pel_img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP tit_cabecera_id, DROP edicion_id, DROP introduccion_id, CHANGE video_mirant tit_cabecera VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
