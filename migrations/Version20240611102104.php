<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240611102104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog ALTER status SET DEFAULT NULL');
        $this->addSql('ALTER TABLE blog ALTER blocked_at SET DEFAULT NULL');
        $this->addSql('ALTER TABLE blog ALTER created_at SET DEFAULT NULL');
        $this->addSql('ALTER TABLE blog ALTER updated_at SET DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ALTER avatar SET DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE blog ALTER status DROP NOT NULL');
        $this->addSql('ALTER TABLE blog ALTER blocked_at DROP NOT NULL');
        $this->addSql('ALTER TABLE blog ALTER created_at DROP NOT NULL');
        $this->addSql('ALTER TABLE blog ALTER updated_at DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER avatar DROP NOT NULL');
    }
}
