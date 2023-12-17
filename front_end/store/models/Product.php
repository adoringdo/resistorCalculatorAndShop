<?php

namespace store\models;
use PDO;

class Product
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getProductsByCategory(?int $categoryId): array
    {
        if ($categoryId) {
            $stmt = $this->db->prepare('SELECT * FROM prekes WHERE category_id = ?');
            $stmt->execute([$categoryId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        $stmt = $this->db->prepare('SELECT * FROM prekes');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsById(array $ids): array
    {
        $placeholders = str_repeat('?,', count($ids) - 1) . '?';
        $sql = 'SELECT * FROM prekes WHERE id IN (' . $placeholders . ')';
        $stmt = $this->db->prepare($sql);
        $stmt->execute($ids);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function filter(
        $resistance,
        $price,
        $rings,
        $ohmId,
        $resistorType
    ): array
    {

        $valueCount = 0;
        $values = [];
        $sql = 'SELECT * FROM prekes WHERE';

        if ($resistance) {
            $values[] = $resistance;
            $sql .= ' varza >= ?';
            $valueCount++;
        }
        if ($price) {
            $values[] = $price;
            if ($valueCount > 0) {
                $sql .= ' AND';
            }
            $sql = $sql . ' kaina >= ?';
            $valueCount++;
        }
        if ($rings) {
            $values[] = $rings;
            if ($valueCount > 0) {
                $sql .= ' AND';
            }
            $sql = $sql . ' ziedai >= ?';
            $valueCount++;
        }
        if ($ohmId) {
            $values[] = $ohmId;
            if ($valueCount > 0) {
                $sql .= ' AND';
            }
            $sql = $sql . ' omh_id >= ?';
            $valueCount++;
        }
        if ($resistorType) {
            $values[] = $resistorType;
            if ($valueCount > 0) {
                $sql .= ' AND';
            }
            $sql = $sql . ' resistor_type = ?';
        }

        $stmt = $this->db->prepare($sql);
        $stmt->execute($values);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
