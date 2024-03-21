<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function getAllUsers(){
        $users = DB::select('SELECT * FROM users ORDER BY create_at DESC');
        return $users;
    }
    public function addUsser($data){
        DB::insert('INSERT INTO users (fullname, email, create_at) values(?, ?, ?)',
        $data);
    }
    public function getDetail($id){
        DB::select('SELECT * FROM '.$this->table.'WHERE id = ?', [$id]);
    }
    public function updateUser($data, $id){
        $data [] = $id;
        return DB::update('UPDATE'.$this->table.'SET fullname=?, email=?, update_at=?, where id = ?', $data);
    }
    public function deleteUser($id){
        return DB::delete("DELETE FROM $this->table WHERE id = ?", [$id]);
    }
    public function statementUser($sql){
        return DB::statement($sql);
    }
    public function learnQueryBuilder(){
        //lay tat ca bang ghi cua table
        $id = 20;

        $lists = DB::table($this->table)
        // ->where('id', 19)
        ->select('fullname as hoten', 'email','id', 'update_at', 'create_at')
        // ->where('id', 18)
        // ->where(function($query) use ($id){
        //     $query->where('id', '<', $id)->orWhere('id', '>', $id);
        // })
        //->where('fullname', 'like', '%van quan%')
        // ->whereBetween('id', [18,20])
        // ->whereNotBetween('id', [18,20])
        // ->whereNotIn('id', [18,20])
        // ->whereNotNull('update_at')
        // ->whereDay('create_at', '18')
        ->whereColumn('create_at', '>', 'update_at')

        // ->toSql();
        // ->get();
        //Join bảng
        $lists = DB::table('users')
        // ->select('users.*', 'groups.name as group_name')
        // ->rightJoin('groups', 'users.group_id', '=', 'groups.id')
        // ->inRandomOrder()
        // ->select(DB::raw('count(id) as email_count'), 'email', 'fullname')
        // ->groupBy('email')
        // ->groupBy('fullname')

        // ->having('email_count', '>=', 2)
        // ->orderBy('create_at', 'asc')
        // ->orderBy('create_at', 'desc')
        // ->limit(2)
        // ->offset(2)
        ->take(2)
        ->skip(2)
        ->get();


        $sql = DB::getQueryLog();
        dd($lists);
        dd($sql);
        
        //Lấy 1 bản ghi đầu tiên của table
        $detail = DB::table($this->table)->first();
        
    }
}
