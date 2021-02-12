<?php
// 人間クラス
class CHuman {
    // プロパティ
    public $Name = "";
    public $Gender = "";
    public $Length = 0;
    public $Weight = 0;
    public $Vitality = 0;
    public $job = "";

    // 名前（セット/ゲット）
    public function setName ($name) {
        $this->Name = $name;
    }
    public function getName () {
        return $this->Name;
    }

    // 性別（セット/ゲット）
    public function setGender ($gender) {
        $this->Gender = $gender;
    }
    public function getGender () {
        return $this->Gender;
    }

    // 身長（セット/ゲット）
    public function setLength ($length) {
        $this->Length = $length;
    }
    public function getLength () {
        return $this->Length;
    }

    // 体重（セット/ゲット）
    public function setWeight ($weight) {
        $this->Weight = $weight;
    }
    public function getWeight () {
        return $this->Weight;
    }

    // 体力（セット/ゲット）
    public function setVitality ($vitality) {
        $this->Vitality = $vitality;
    }
    public function getVitality () {
        return $this->Vitality;
    }

    // 仕事（セット/ゲット）
    public function setJob ($job) {
        $this->Job = $job;
    }
    public function getJob () {
        return $this->Job;
    }

    // 好物（セット/ゲット）
    public function setLikeFood ($likeFood) {
        $this->LikeFood = $likeFood;
    }
    public function getLikeFood () {
        return $this->LikeFood;
    }

    // 料理メソッド
    public function cooking ($food) {
        if ($food === "目玉焼き") {
            $type = 1;
        } elseif ($food === "チャーハン") {
            $type = 2;
        } elseif ($food === "お好み焼き") {
            $type = 3;
        } elseif ($food === "カレー") {
            $type = 4;
        }
        // カプセル化
        CHuman::eat ($type);
        return $food;
    }

    // カプセル化
    public function eat ($type) {
        if ($type === 1) {
            CHuman::setWeight (CHuman::getWeight() + 1);
            CHuman::setVitality (CHuman::getVitality() + 10);
        }
        if ($type === 2) {
            CHuman::setWeight (CHuman::getWeight() + 2);
            CHuman::setVitality (CHuman::getVitality() + 15);
        }
        if ($type === 3) {
            CHuman::setWeight (CHuman::getWeight() + 3);
            CHuman::setVitality (CHuman::getVitality() + 25);
        }
        if ($type === 4) {
            CHuman::setWeight (CHuman::getWeight() + 5);
            CHuman::setVitality (CHuman::getVitality() + 30);
        }
    }
}

// Meクラス（人間クラスを継承）
class CMe extends CHuman {
    // コンストラクタ
    public function __construct() {
        // プロパティをセット
        CHuman::setName ("genki");
        CHuman::setGender ("男");
        CHuman::setLength (170);
        CHuman::setWeight (65);
        CHuman::setVitality (100);
        CHuman::setJob ("エンジニア");
        CHuman::setLikeFood ("目玉焼き");
    }
    // 仕事メソッド
    public function job () {
        $name = CHuman::getName();
        $job = CHuman::getjob();
        echo $name . 'は仕事をした。' . $job . 'として働いた。';
    }
}

// FriendAクラス（人間クラスを継承）
class CFriendA extends CHuman {
    // コンストラクタ
    public function __construct() {
        // プロパティをセット
        $Human = new CHuman;
        CHuman::setName ("taro");
        CHuman::setGender ("男");
        CHuman::setLength (180);
        CHuman::setWeight (75);
        CHuman::setVitality (100);
        CHuman::setJob ("消防士");
        CHuman::setLikeFood ("チャーハン");
    }
    // 仕事メソッド
    public function job () {
        $name = CHuman::getName();
        $job = CHuman::getjob();
        echo $name . 'は仕事をした。' . $job . 'として働いた。';
    }
}

// FriendBクラス（人間クラスを継承）
class CFriendB extends CHuman {
    // コンストラクタ
    public function __construct() {
        // プロパティをセット
        $Human = new CHuman;
        CHuman::setName ("jiro");
        CHuman::setGender ("男");
        CHuman::setLength (165);
        CHuman::setWeight (55);
        CHuman::setVitality (100);
        CHuman::setJob ("経営者");
        CHuman::setLikeFood ("お好み焼き");
    }
    // 仕事メソッド
    public function job () {
        $name = CHuman::getName();
        $job = CHuman::getjob();
        echo $name . 'は仕事をした。' . $job . 'として働いた。';
    }
}

// Mamaクラス（人間クラスを継承）
class CMama extends CHuman{
    // コンストラクタ
    public function __construct() {
        // プロパティをセット
        CHuman::setName ("hanako");
        CHuman::setGender ("女");
        CHuman::setLength (150);
        CHuman::setWeight (50);
        CHuman::setVitality (100);
        CHuman::setJob ("保育士");
        CHuman::setLikeFood ("カレー");
    }
    // 仕事メソッド
    public function job () {
        $name = CHuman::getName();
        $job = CHuman::getjob();
        echo $name . 'は仕事をした。' . $job . 'として働いた。';
    }
}

// Meクラスをインスタンス化してオブジェクトを生成
$Me = new CMe;
// FriendAクラスをインスタンス化してオブジェクトを生成
$FriendA = new CFriendA;
// FriendBクラスをインスタンス化してオブジェクトを生成
$FriendB = new CFriendB;
// Meクラスをインスタンス化してオブジェクトを生成
$Mama = new CMama;

// プロパティの表示とメソッドの実行
showData($Me);
showData($FriendA);
showData($FriendB);
showData($Mama);

// プロパティの表示とメソッドの実行
function showData ($Human) {
    // 各種プロパティを表示
    echo '名前：' . $Human->getName() . "<br>";
    echo '性別：' . $Human->getGender() . "<br>";
    echo '身長：' . $Human->getLength() . "<br>";
    echo '体重：' . $Human->getWeight() . "<br>";
    echo '体力：' . $Human->getVitality() . "<br>";
    // 継承されたcookingメソッドを実行
    echo $Human->getName() . 'は' . $Human->cooking($Human->getLikeFood()) . 'を食べた。体重が' . $Human->getWeight() . 'kgまで増えて、体力が' . $Human->getVitality() . 'まで上がった。' . "<br>";
    // jobメソッドを実行
    echo $Human->job() . "<br>";
    echo '<br>';
}
?>