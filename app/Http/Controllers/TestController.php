<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test1(){
        return '控制器路由';
    }
    public function test2(Request $request){
        dump($request->all('id','wozhijiehaojieaho'));
    }
    /**
     * 增删改查
     */
    public function add(){
        //定义数组
        $data=[
            'name'=>'1dao',
            'age'=>'21',
            'email'=>'li19853149156@163.com'
        ];
        // DB::connection('read') true
        dump(DB::table('member')->insertGetId($data));//返回成功的第几条数据
    }
    public function del(){
        //了解真正的删除，一般是逻辑删除改变字段名
        //delete表示删除记录，truncate表示清空整个数据库
        $res = DB::table('member')->where('id','=',1)->delete();
        dump($res);
    }
    public function mod(){
        //定义数组
        $data=[
            'name'=>'zouhaha',
        ];
        // dump(DB::table('member')->where('id','=',3)->update($data));//返回收到影响的条数
        // dump(DB::table('member')->increment('age',5));//每次加5 修改所有字段
        // dump(DB::table('member')->decrement('age',5));//每次减5 修改所有字段
        // dump(DB::table('member')->where('name','=','zhangsan')->decrement('age',5));//每次减5
    }
    public function select(){
        //相当于select * from member;返回一个集合字段
        // $data = DB::table('member')->get();
        // $data = DB::table('member')->where('age','<',30)->get();
        // dump($data);
        // foreach($data as $key => $value){
        //     dump($value->name);//对象访问属性的方法
        // }
        //first和get的区别 first返回的是一个对象，而get返回的是一个集合
        //获取具体的值
        // dump(DB::table('member')->where('id',1)->value('name'));
        //获取某些字段数据（多个字段）
        // $user1 = DB::table('member')->select('name','email')->get();
        // $user2 = DB::table('member')->select('name as user_name')->get();
        // dump($user1);
        // dump($user2);
        //不解析字段原样使用
        // $data = DB::table('member')->select(DB::raw('name,age'))->get();
        //排序操作
        // $data = DB::table('member')->orderBy('age','desc')->get();//降序
        // $data = DB::table('member')->orderBy('age','asc')->get();//升序
        //分页操作
        //offset从什么地方开始
        $data = DB::table('member')->limit(3)->offset(2)->get();
        dump($data);
    }

    public function test3(){
        return view('admin.test.test3');
    }
}
