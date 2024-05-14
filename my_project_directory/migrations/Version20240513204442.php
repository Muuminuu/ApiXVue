<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240513204442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE asset_category DROP FOREIGN KEY FK_842703415DA1941');
        $this->addSql('DROP INDEX IDX_842703415DA1941 ON asset_category');
        $this->addSql('ALTER TABLE asset_category DROP asset_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE asset_category ADD asset_id INT NOT NULL');
        $this->addSql('ALTER TABLE asset_category ADD CONSTRAINT FK_842703415DA1941 FOREIGN KEY (asset_id) REFERENCES asset (id)');
        $this->addSql('CREATE INDEX IDX_842703415DA1941 ON asset_category (asset_id)');
    }
}
