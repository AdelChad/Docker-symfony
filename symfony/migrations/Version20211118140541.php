<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211118140541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE owner_account (owner_id INT NOT NULL, account_id INT NOT NULL, INDEX IDX_F140D07B7E3C61F9 (owner_id), INDEX IDX_F140D07B9B6B5FBA (account_id), PRIMARY KEY(owner_id, account_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE owner_account ADD CONSTRAINT FK_F140D07B7E3C61F9 FOREIGN KEY (owner_id) REFERENCES owner (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE owner_account ADD CONSTRAINT FK_F140D07B9B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE owner_account');
        $this->addSql('DROP TABLE user');
    }
}
