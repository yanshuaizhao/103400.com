<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/13
 * Time: 15:59
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    /**
     * 首页
     */
    public function home()
    {
        $list = DB::table('article')->orderBy('id', 'desc')->get();

        return view('www/index', compact('list'));
    }


    /**
     * 文章详情
     */
    public function articleDetail($aid)
    {
        $data = DB::table('article')->find($aid);

        return view('www/article_detail', ['data' => $data]);
    }

    /**
     * IT名言
     */
    public function ming()
    {

        $list = [
            [
                'title' => 'Stay hungry, stay foolish.',
                'desc'  => '乔帮主在2005年给斯坦福大学做毕业演讲中提到过的他最喜欢的一句话。'
            ],
            [
                'title' => 'You build it, you run it.',
                'desc'  => 'Amazon 的 CTO：Werner Vogels 的名言。是相对传统应用开发模式提出来的，在微服务架构里头特别受欢迎。
传统的单体应用是基于项目模式的，且多数的项目都采用瀑布模型进行开发，开发团队根据客户的业务需求及功能设计，开发出软件系统并交付给客户，自此，该系统将由运维团队接手，进入系统运维阶段。
而在微服务架构体系中，更倾向于让开发团队负责应用系统的全部生命周期，应用系统的开发是基于快速迭代方式来实现的，这是一个地地道道的产品研发思路，让服务的开发者与服务的使用者（客户）形成每日的交流反馈，来自直接客户的反馈有助于开发者提升服务的品质。'
            ],
            [
                'title' => 'Talk is cheap. Show me the code.',
                'desc'  => 'Linux 的创始人 Linus Torvalds 在 2000-08-25 给linux-kernel 邮件列表的一封邮件提到的：Talk is cheap. Show me the code. 能说算不上什么，有本事就把你的代码给我看看。'
            ],
            [
                'title' => 'Go big or go home.',
                'desc'  => 'Facebook 的办公室标语：Go big or go home. 要么牛逼，要么滚蛋。'
            ],
            [
                'title' => 'Done is better than perfect.',
                'desc'  => 'Facebook 的标语：Done is better than perfect. 完成比完美更好。'
            ],
            [
                'title' => 'Eat our own dog food.',
                'desc'  => '据说，在狗粮生产基地，新配制出的狗粮都是要经过好多人品尝并通过后才会上市的。
而在IT界，微软公司也采用这一做法来检测他们自己研发的软件，他们管这叫做 eat our own dog food。Dog food 指软件公司开发出新的软件程序后，在发布之前先在公司内部使用，即“内部试用”，或者做名词指“内部试用的软件”。
微软公司让“吃我们自己的狗食”这句话变得人尽皆知，这句话的意思是：每天研发工作的一部分就是使用自己正在开发的软件。这种做法传达的理念是，研发人员在使用自己的软件时能够很快发现漏洞或者不对的地方。'
            ],
        ];


        return view('www/ming', ['list' => $list]);
    }

}