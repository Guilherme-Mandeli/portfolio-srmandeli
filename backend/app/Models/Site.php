<?php

namespace App\Models;

use PDO;

class Site {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM sites ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM sites WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO sites (title, description, excerpt, image_url, url, slug, status, created_at, updated_at)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
        return $stmt->execute([
            $data['title'],
            $data['description'],
            $data['excerpt'] ?? null,
            $data['image_url'],
            $data['url'],
            $data['slug'],
            $data['status'] ?? 'published'
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE sites SET title = ?, description = ?, excerpt = ?, image_url = ?, url = ?, slug = ?, status = ?, updated_at = NOW() WHERE id = ?");
        return $stmt->execute([
            $data['title'],
            $data['description'],
            $data['excerpt'] ?? null,
            $data['image_url'],
            $data['url'],
            $data['slug'],
            $data['status'] ?? 'published',
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM sites WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
