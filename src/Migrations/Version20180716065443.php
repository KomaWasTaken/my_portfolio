<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180716065443 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE portfolio (id INT AUTO_INCREMENT NOT NULL, por_title VARCHAR(255) DEFAULT NULL, por_short_desc VARCHAR(255) DEFAULT NULL, por_link VARCHAR(255) DEFAULT NULL, por_long_desc LONGTEXT DEFAULT NULL, por_main_techno VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE portfolio_projects');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE portfolio_projects (por_id INT AUTO_INCREMENT NOT NULL, por_title VARCHAR(255) NOT NULL COLLATE utf8_general_ci, por_short_desc VARCHAR(255) NOT NULL COLLATE utf8_general_ci, por_link VARCHAR(255) NOT NULL COLLATE utf8_general_ci, por_long_desc LONGTEXT DEFAULT NULL COLLATE utf8_general_ci, por_main_techno VARCHAR(255) DEFAULT NULL COLLATE utf8_general_ci, UNIQUE INDEX por_id_UNIQUE (por_id), UNIQUE INDEX por_link_UNIQUE (por_link), PRIMARY KEY(por_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE portfolio');
    }
}
