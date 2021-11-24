<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211121230046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oauth2_access_tokens DROP FOREIGN KEY FK_D247A21B19EB6921');
        $this->addSql('ALTER TABLE oauth2_auth_codes DROP FOREIGN KEY FK_A018A10D19EB6921');
        $this->addSql('ALTER TABLE oauth2_refresh_tokens DROP FOREIGN KEY FK_D394478C19EB6921');
        $this->addSql('ALTER TABLE oauth2_access_tokens DROP FOREIGN KEY FK_D247A21BA76ED395');
        $this->addSql('ALTER TABLE oauth2_auth_codes DROP FOREIGN KEY FK_A018A10DA76ED395');
        $this->addSql('ALTER TABLE oauth2_refresh_tokens DROP FOREIGN KEY FK_D394478CA76ED395');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE oauth2_access_tokens');
        $this->addSql('DROP TABLE oauth2_auth_codes');
        $this->addSql('DROP TABLE oauth2_clients');
        $this->addSql('DROP TABLE oauth2_refresh_tokens');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE book DROP author, DROP borrowed, DROP userid, DROP borrow_date, DROP coverurl, CHANGE title name VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE oauth2_access_tokens (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, user_id INT DEFAULT NULL, expires_at INT DEFAULT NULL, scope VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, token VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_D247A21B19EB6921 (client_id), INDEX IDX_D247A21BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth2_auth_codes (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, user_id INT DEFAULT NULL, redirect_uri LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, expires_at INT DEFAULT NULL, scope VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, token VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_A018A10D19EB6921 (client_id), INDEX IDX_A018A10DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth2_clients (id INT AUTO_INCREMENT NOT NULL, random_id VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, redirect_uris LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', secret VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, allowed_grant_types LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE oauth2_refresh_tokens (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, user_id INT DEFAULT NULL, expires_at INT DEFAULT NULL, scope VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, token VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_D394478C19EB6921 (client_id), INDEX IDX_D394478CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, login LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, isadmin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE oauth2_access_tokens ADD CONSTRAINT FK_D247A21B19EB6921 FOREIGN KEY (client_id) REFERENCES oauth2_clients (id)');
        $this->addSql('ALTER TABLE oauth2_access_tokens ADD CONSTRAINT FK_D247A21BA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE oauth2_auth_codes ADD CONSTRAINT FK_A018A10D19EB6921 FOREIGN KEY (client_id) REFERENCES oauth2_clients (id)');
        $this->addSql('ALTER TABLE oauth2_auth_codes ADD CONSTRAINT FK_A018A10DA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE oauth2_refresh_tokens ADD CONSTRAINT FK_D394478C19EB6921 FOREIGN KEY (client_id) REFERENCES oauth2_clients (id)');
        $this->addSql('ALTER TABLE oauth2_refresh_tokens ADD CONSTRAINT FK_D394478CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE book ADD author LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD borrowed TINYINT(1) DEFAULT NULL, ADD userid INT DEFAULT NULL, ADD borrow_date DATE DEFAULT NULL, ADD coverurl LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name title VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
