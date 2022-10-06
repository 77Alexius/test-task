<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221005160604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_PRODUCTS_BELONGTO_CATEGORI');
        $this->addSql('ALTER TABLE products CHANGE cID cID INT DEFAULT NULL COMMENT \'идентификатор\'');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AE5DADDAE FOREIGN KEY (cID) REFERENCES categories (cID)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AE5DADDAE');
        $this->addSql('ALTER TABLE products CHANGE cID cID INT NOT NULL COMMENT \'идентификатор\'');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_PRODUCTS_BELONGTO_CATEGORI FOREIGN KEY (cID) REFERENCES categories (cID) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
