<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'criteria';

    public function showCriteria()
    {
        $dataquery = $this->db->query("SELECT * FROM criteria");
        return $dataquery->getResult();
    }

    public function showLocation()
    {
        $dataquery = $this->db->query("SELECT * FROM location");
        return $dataquery->getResult();
    }
    public function showNum()
    {
        $dataquery = $this->db->query("SELECT * FROM numerisasi");
        return $dataquery->getResult();
    }
    public function showNorm()
    {
        $query1 = $this->db->query("SELECT SQRT(SUM(POW(criteria_one, 2))) AS sum_squared_criteria_one FROM location;
        ");
        $res1 = $query1->getRow();

        $query2 = $this->db->query("SELECT SQRT(SUM(CASE criteria_two
        WHEN 'Good' THEN 4
        WHEN 'Enough' THEN 3
        WHEN 'Less' THEN 2
        WHEN 'Not Yet' THEN 1
        ELSE 0
    END * 
    CASE criteria_two
        WHEN 'Good' THEN 4
        WHEN 'Enough' THEN 3
        WHEN 'Less' THEN 2
        WHEN 'Not Yet' THEN 1
        ELSE 0
    END)) AS sum_squared_criteria_two
FROM location;
        ");
        $res2 = $query2->getRow();


        $query3 = $this->db->query("SELECT SQRT(SUM(POW(criteria_three, 2))) AS sum_squared_criteria_three FROM location;
        ");
        $res3 = $query3->getRow();
   

        $query4 = $this->db->query("SELECT SQRT(SUM(POW(criteria_four, 2))) AS sum_squared_criteria_four FROM location;
        ");
        $res4 = $query4->getRow();

        
        $query5 = $this->db->query("SELECT SQRT(SUM(CASE criteria_five
        WHEN 'Good' THEN 4
        WHEN 'Enough' THEN 3
        WHEN 'Less' THEN 2
        WHEN 'Not Yet' THEN 1
        ELSE 0
    END * 
    CASE criteria_five
        WHEN 'Good' THEN 4
        WHEN 'Enough' THEN 3
        WHEN 'Less' THEN 2
        WHEN 'Not Yet' THEN 1
        ELSE 0
    END)) AS sum_squared_criteria_five
FROM location;
        ");
        $res5 = $query5->getRow();
        return array($res1, $res2, $res3,$res4,$res5);
    }

    public function bobot(){
        $dataquery = $this->db->query("SELECT value from criteria");
        return $dataquery->getResult();

    }

    public function dataKriteriaCounter()
{
    //count how much record in a table
    $dataquery = $this->db->query("select count(*) as counter from criteria");
    return $dataquery->getRow();
}
public function dataLocationCounter()
{
    //count how much record in a table
    $dataquery = $this->db->query("select count(*) as counter from location");
    return $dataquery->getRow();
}
public function dataNumCounter()
{
    //count how much record in a table
    $dataquery = $this->db->query("select count(*) as counter from numerisasi");
    return $dataquery->getRow();
}

}

