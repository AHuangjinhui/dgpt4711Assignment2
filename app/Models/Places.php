<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Stephen Chow',
            'description' => 'Stephen Chow was born on June 22, 1962, in Hong Kong, China, and is originally from Ningbo, Zhejiang Province.
Chinese film and television actor, director, screenwriter, producer, businessman, CPPCC member, graduated from TVB artist training class.
National first class actor.',
            'link' => 'https://baike.baidu.com/item/%E5%91%A8%E6%98%9F%E9%A9%B0/169917?fr=aladdin',
            'city' => ' Hong Kong, China',
            'Magnum opus' => '《Kung fu》   《Shaolin soccer》  《The little mermaid》  《A Chinese Odyssey....》',
            'constellation' => 'Cancer',
            'image' => 'zxc.jpeg',
           
        ],
        '2' => [
            'id' => 2,
            'name' => 'yue yunpeng',
            'description' => 'Yue Yunpeng, whose real name is Yue Longgang, was born in Puyang, Henan province on April 15, 1985. He is a Chinese actor in crosstalk, film and television.
                In 2004, he devoted himself to cross talk and became a teacher of Guo Degang, specializing in cross talk, taiping lyrics and bamboo blackboard writing.
                 He made his debut in 2005.',
            'link' => 'https://haokan.baidu.com/v?vid=1486458867003045623&pd=bjh&fr=bjhauthor&type=video',
            'city' => 'Puyang city, Henan Province',
            'Magnum opus' => '《Pancakes man》   《From all over your world》   《The song of the rings》 ',
            'constellation' => 'Aries',
            'image' => 'xiaoyueyue.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'guo degang',
            'description' => 'Guo Degang, male, born in Tianjin city on January 18, 1973, crosstalk actor, film, TV drama actor, TV talk show host.
                In 1979, he devoted himself to the art world. He first learned storytelling from Gao Qinghai, a senior storyteller, and then learned crosstalk from Crosstalk master Chang Baofeng and crosstalk master Hou Yaowen.
                Meanwhile, I also learned Peking Opera, Pingju opera, Hebei Clapper Opera and other operas.',
            'link' => 'https://3g.163.com/v/video/VJ18CK3HM.html',
            'city' => 'tianjin',
            'Magnum opus' => '《All my life》   《Lost On The Road》   《I am too happy to》 ',
            'constellation' => 'Capricornus',
            'image' => 'guodegang.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'shenteng',
            'description' => 'Shen Teng, born in Qiqihar, Heilongjiang Province, China on October 23, 1979, is an actor, film director and screenwriter in mainland China. He is a contract artist of Mahua Happy Stage play. He graduated from the Theater performance Department of the PLA Art Academy..',
            'link' => 'https://www.iqiyi.com/a_19rrhrmmtp.html',
            'city' => 'Qiqihar city, Heilongjiang Province',
            'Magnum opus' => '《Charlotte worry》   《The richest man in Xihong city》   《Fast life》 ',
            'constellation' => 'Libra',
            'image' => 'shenteng.jpeg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Wang baoqiang',
            'description' => 'Wang Baoqiang was born in Xingtai city, Hebei Province on April 29, 1982. He is an actor and director in the Chinese mainland.',
            'link' => 'https://baike.baidu.com/item/%E4%BA%BA%E5%9C%A8%E5%9B%A7%E9%80%94/7585422?fr=aladdin',
            'city' => 'Xingtai City, Hebei Province',
            'Magnum opus' => '《Detective Chinatown》   《Lost On Journey》   《blind shaft》 ',
            'constellation' => 'Libra',
            'image' => 'wangbaoqiang.jpeg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Wu mengda',
            'description' => 'Wu Mengda, born in Xiamen, Fujian Province on January 2, 1953, moved to Hong Kong with his parents at the age of seven. He is a Hong Kong, China actor.',
            'link' => 'https://baike.baidu.com/item/%E6%B5%81%E6%B5%AA%E5%9C%B0%E7%90%83/16278407?fr=aladdin',
            'city' => 'Fujian xiamen',
            'Magnum opus' => '《Fight Back to School》   《Hail the Judge 》   《The Wandering Earth》 ',
            'constellation' => 'Capricornus',
            'image' => 'dashu.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
