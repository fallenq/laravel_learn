<?php
namespace Frameworks\Designer\Iterator;

use Illuminate\Support\Facades\DB;

class CDSearchByBandIterator implements \Iterator
{
    private $_CDs = [];
    private $_valid = false;

    public function __construct($bandName)
    {
//        $results = DB::table('users')->where('name', $bandName)->get()->toArray();
        $results = [
            ['id'=>1, 'band'=>'band1', 'title'=>'title1', 'tracktitle'=>'tracktitle1'],
            ['id'=>2, 'band'=>'band2', 'title'=>'title2', 'tracktitle'=>'tracktitle2']
        ];
        $cdID = 0;
        $cd = null;
        if (!empty($results)) {
            foreach ($results as $result) {
                if ($result['id'] !== $cdID) {
                    if (!is_null($cd)) {
                        $this->_CDs[] = $cd;
                    }
                    $cdID = $result['id'];
                    $cd = new CD($result['band'], $result['title']);
                }
                $cd->addTrack($result['tracktitle']);
            }
            $this->_CDs[] = $cd;
        }
    }

    public function current()
    {
        return current($this->_CDs);
    }

    public function next()
    {
        $this->_valid = (next($this->_CDs) === false) ? false : true;
    }

    public function key()
    {
        return key($this->_CDs);
    }

    public function valid()
    {
        return $this->_valid;
    }

    public function rewind()
    {
        $this->_valid = (reset($this->_CDs) === false) ? false: true;
    }
}