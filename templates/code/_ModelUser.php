<?php

namespace <%= project.namespace %>\App\Models;
use PDO;
use <%= project.namespace %>\Core\Model;
/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, name FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
