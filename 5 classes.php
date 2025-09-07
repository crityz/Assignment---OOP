//James Dominic Ortega
//BSCS - 2A

<?php

class Hero{
    public $name;
    public $exp;
    public $hp;
    public $mp;
    public $ad;
    public $ap;
    public $armor;
    public $mArmor;
    public $cooldownReduction;
    public $ms;

    public function __construct($pName, $pExp, $pHp, $pMp, $pAd, $pAp, $pArmor, $pMArmor,$pCDR,$pMS)
    {
        $this->name = $pName;
        $this->exp = $pExp;
        $this->hp = $pHp;
        $this->mp = $pMp;
        $this->ad = $pAd;
        $this->ap = $pAp;
        $this->armor = $pArmor;
        $this->mArmor = $pMArmor;
        $this->cooldownReduction = $pCDR;
        $this->ms = $pMS;
    }

    public function gainExp(){
        echo "Gaining experience...";
    }
    public function gainHp(){
        echo "Healing...";
    }
    public function loseHp(){
        echo "Taken damage...";
    }
    public function gainMp(){
        echo "Restoring...";
    }
    public function loseMp(){
        echo "Mana Used...";
    }    
    public function gainAd(){
        echo "Attack damage incereased...";
    }
    public function gainAp(){
        echo "Magic damage increased...";
    }    
    public function gainArmor(){
        echo "Armor increased...";
    }
    public function gain_mArmor(){
        echo "Magic Armor increased...";
    }    
    public function reduceCooldown(){
        echo "Cooldown Reduced...";
    }
    public function gainMS(){
        echo "Mobility increased...";
    }
}

$Champion = new Hero("Gwen", 40, 600, 330, 63, 0, 33, 32, 0, 340);
echo "Name: " . $Champion->name;
echo "<br> EXP: " . $Champion->exp;
echo "<br> Health: " . $Champion->hp;
echo "<br> Mana: " . $Champion->mp;
echo "<br> Attack Damage: " . $Champion->ad;
echo "<br> Ability Power: " . $Champion->ap;
echo "<br> Armor: " . $Champion->armor;
echo "<br> Magic Armor: " . $Champion->mArmor;
echo "<br> Cooldown Reduction: " . $Champion->cooldownReduction;
echo "<br> Movement Speed: " . $Champion->ms;

class Health{
    public $itemName;
    public $hp;
    public $hpRegen;

    public function __construct($pItemName, $pHp, $pHpRegen)
    {
        $this->itemName = $pItemName;
        $this->hp = $pHp;
        $this->hpRegen = $pHpRegen;
    }

    public function gainHp(){
        echo "Gains Health...";
    }
    public function gainHPRegen(){
        echo "Healing...";
    }
}

$warmog = new Health("Warmog's Armor", "+800", "200%");
echo "<br><br>Item Name: " . $warmog->itemName;
echo "<br>Health: " . $warmog->hp;
echo "<br>Health Regen: " . $warmog->hpRegen;

class Magic{
    public $itemName;
    public $ap;

    public function __construct($pItemName, $pAp)
    {
        $this->itemName = $pItemName;
        $this->ap = $pAp;
    }

    public function gainAp(){
        echo "Magic Damage increased...";
    }
}

$rabadon = new Magic("Rabadon's Deathcap", "+120");
echo "<br><br>Item Name: " . $rabadon->itemName;
echo "<br>Ability Power: " . $rabadon->ap;

class Attack{
    public $itemName;
    public $ad;
    public $critChance;

    public function __construct($pItemName, $pAd, $pCritChance)
    {
        $this->itemName = $pItemName;
        $this->ad = $pAd;
        $this->critChance = $pCritChance;
    }

    public function gainAd(){
        echo "Attack Damage increased...";
    }
    public function activateCritChance(){
        echo "Critical Damage applied...";
    }

}
$infinity = new Attack("Infinity Edge", "+65", "25%");
echo "<br><br>Item Name: " . $infinity->itemName;
echo "<br>Attack Power: " . $infinity->ad;
echo "<br>Critical Chance: " . $infinity->critChance;

class Armor{
    public $itemName;
    public $armor;
    public $hp;

    public function __construct($pItemName, $pArmor, $pHp)
    {
        $this->itemName = $pItemName;
        $this->armor = $pArmor;
        $this->hp = $pHp;
    }

    public function gainArmor(){
        echo "Armor increased...";
    }
    public function gainHp(){
        echo "Health Increased...";
    }

}
$thornmail = new Armor("Thornmail", "+70", "+350");
echo "<br><br>Item Name: " . $thornmail->itemName;
echo "<br>Armor: " . $thornmail->armor;
echo "<br>Health: " . $thornmail->hp;


?>
