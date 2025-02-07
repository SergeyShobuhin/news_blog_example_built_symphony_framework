<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250131064023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE comment_reply_id_seq CASCADE');
        $this->addSql('ALTER TABLE comment_reply DROP CONSTRAINT fk_54325e11f8697d13');
        $this->addSql('ALTER TABLE comment_reply DROP CONSTRAINT fk_54325e11f675f31b');
        $this->addSql('DROP TABLE comment_reply');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE comment_reply_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE comment_reply (id INT NOT NULL, comment_id INT NOT NULL, author_id INT NOT NULL, content TEXT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_54325e11f675f31b ON comment_reply (author_id)');
        $this->addSql('CREATE INDEX idx_54325e11f8697d13 ON comment_reply (comment_id)');
        $this->addSql('ALTER TABLE comment_reply ADD CONSTRAINT fk_54325e11f8697d13 FOREIGN KEY (comment_id) REFERENCES comment (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE comment_reply ADD CONSTRAINT fk_54325e11f675f31b FOREIGN KEY (author_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
