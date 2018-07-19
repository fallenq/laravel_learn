<?php

namespace App\Http\Controllers\Frontend\V0\Home;

use App\Http\Controllers\Controller;
use Frameworks\Designer\Adapter\LogToCSV;
use Frameworks\Designer\Adapter\LogToCSVAdapter;
use Frameworks\Designer\Builder\ProductBuilder;
use Frameworks\Designer\Decorator\CD;
use Frameworks\Designer\Decorator\CDTrackListDecoratorCaps;
use Frameworks\Designer\Delegation\NewPlayList;
use Frameworks\Designer\Delegation\PlsPlayListDelegation;
use Frameworks\Designer\Facade\WebServiceFacade;
use Frameworks\Designer\Factory\CDFactory;
use Frameworks\Designer\Interpreter\User;
use Frameworks\Designer\Interpreter\UserCDInterpreter;
use Frameworks\Designer\Iterator\CDSearchByBandIterator;
use Frameworks\Tool\Base\Response\BaseResponse;
use Frameworks\Tool\Ioc;
use Frameworks\Tool\Storage\FileTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
//        dd(FileTool::getInstance('public')->put('test.txt', 'Contents'));
//        dd(FileTool::getInstance('public')->get('test.txt'));
//        dd(asset('storage/test.txt'));
//        $response = Ioc::getInstance(BaseResponse::class);
//        $response->errorCode();
//        exit($response->toJson());
//        exit('Hello');
        // TODO: 适配器模式
//        $error = new LogToCSVAdapter("404:Not Found");
//        $log = new LogToCSV($error);
//        $log->write();
        // TODO: 建造者模式
//        $productConfigs = ['type'=>'shirt', 'size'=>'XL', 'color'=>'red'];
//        $builder = new ProductBuilder($productConfigs);
//        $builder->build();
//        $product = $builder->getProduct();
        // TODO: 数据访问对象模式
        // TODO: 装饰器模式
//        $trackFromExternalSource = ['What it means', 'Brr', 'Goodbye'];
//        $myCD = new CD();
//        foreach ($trackFromExternalSource as $track) {
//            $myCD->addTrack($track);
//        }
//        $myCDCaps = new CDTrackListDecoratorCaps($myCD);
//        $myCDCaps->makeCaps();
//        var_dump("The CD contains the following tracks: " . $myCD->getTrackList());
        // TODO: 委托模式
//        $playlist = new NewPlayList(PlsPlayListDelegation::class);
//        $playlist->addSong('/home/aaron/music/brr.mp3', 'Brr');
//        $playlist->addSong('/home/aaron/music/goodbye.mp3', 'Goodbye');
//        $playlistContent = $playlist->getPlayList();
        // TODO: 外观模式
//        $tracksFromExternalSource = ['What it means', 'Brrr', 'Goodbye'];
//        $title = 'Waste of a Rib';
//        $band = 'Never Again';
//        $cd  = new \Frameworks\Designer\Facade\CD($title, $band, $tracksFromExternalSource);
//        var_dump(WebServiceFacade::makeXMLCall($cd));
        // TODO: 工厂模式
//        $title = 'Waste of a Rib';
//        $band = 'Never Again';
//        $tracksFromExternalSource = ['What it means', 'Brrr', 'Goodbye'];
//        $cd = CDFactory::create(\Frameworks\Designer\Factory\CD::class);
//        $cd->setTitle($title);
//        $cd->setBand($band);
//        foreach ($tracksFromExternalSource as $track) {
//            $cd->addTrack($track);
//        }
        // TODO 解釋器模式
//        $username = 'aaron';
//        $user = new User($username);
//        $interpreter = new UserCDInterpreter();
//        $interpreter->setUser($user);
//        var_dump("<h1>{$username}</h1>");
//        var_dump($interpreter->getInterpreted());
        // TODO: 迭代器模式
//        $queryItem = 'Never Again';
//        $cds = new CDSearchByBandIterator($queryItem);
//        print '<h1>Found the Following CDs</h1>';
//        print '<table><tr><th>Band</th><th>Title</th><th>Number Tracks</th></tr>';
//        foreach ($cds as $cd) {
//            print "<tr><td>{$cd->band}</td><td>{$cd->title}</td><td>".count($cd->trackList)."</td></tr>";
//        }
//        print '</table>';
        // TODO: 中介者模式

        exit();
    }
}
