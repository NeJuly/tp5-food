#food
### 关于TP5的一对一、一对多同时存在的关联查询
```php
表：member 下属字段： id, username, password

表：basic 下属字段：id, uid, city

表：photo 下属字段： id, uid, url

关系：member 是主表， 和basic是一对一关系； 和photo是一对多关系；


member 的MODEL：
//建立和basic的关联
public function basic()
    {
        return $this->hasOne('Basic','uid');//hasOne是一对一
    }
    //建立和photo的关联
    public function photo()
    {
        return $this->hasMany('photo','uid');//hasMany是一对多
    }
复制代码
basic 的MODEL：
public function member()
    {
        return $this->belongsTo('Member');
    }
复制代码
photo 的MODEL：
public function member()
    {
        return $this->belongsTo('Member');
    }
复制代码
member 的controller：
public function list()
    {
        $member=new MemberModel();
         $list=$member->with('photo,basic')->find('15')->toArray();//查询一条ID为15的用户数据；toArray()是将结果转为数组。
        $print_r($list); 
    }
```
```php
namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    public function goodsCategory()
    {
        return $this->hasOne('GoodsCategory','id','goods_category_id');
    }

    public function goodsIntro()
    {
        return $this->hasOne('GoodsIntro','goods_id','id');
    }
}
控制器中：
dump($goods->goods_category->name);exit;
```

