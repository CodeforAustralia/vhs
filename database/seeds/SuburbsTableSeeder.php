<?php
/*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
* 
* @author - Rachelle Salvadora
* @website - rachellesalvadora.com
*/

use Illuminate\Database\Seeder;
use App\Models\Postcode;

class SuburbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suburbs = $this->getAllSuburbs();

        foreach($suburbs as $suburb) {
            DB::table('suburbs')->insert([
                'postcode_id' => $this->getPostcodeId($suburb[0]),
                'name' => $suburb[1],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                ]);
            
        }
    }

    // Get a postcode id based on postcode from suburb information
    public function getPostcodeId($postcode)
    {
        $postcodeId = Postcode::where('postcode', $postcode)->first();
        if ($postcodeId) {
            return $postcodeId->id;
        }
        else {
            return false;
        }
    }

    // Return all suburbs and postcodes from victoria
    public function getAllSuburbs()
    {
        $suburbs = array();
        $suburbs[] = [
        "3067","Abbotsford      ","3121"
        ];
        $suburbs[] = [
        "3040","Aberfeldie      ","3039"
        ];
        $suburbs[] = [
        "3825","Aberfeldy   ","3840"
        ];
        $suburbs[] = [
        "3714","Acheron     ","3714"
        ];
        $suburbs[] = [
        "3352","Addington   ","3350"
        ];
        $suburbs[] = [
        "3962","Agnes   ","3953"
        ];
        $suburbs[] = [
        "3231","Aireys Inlet    ","3228"
        ];
        $suburbs[] = [
        "3042","Airport West    ","3039"
        ];
        $suburbs[] = [
        "3021","Albanvale   ","3020"
        ];
        $suburbs[] = [
        "3206","Albert Park     ","3182"
        ];
        $suburbs[] = [
        "3971","Alberton    ","3850"
        ];
        $suburbs[] = [
        "3020","Albion      ","3020"
        ];
        $suburbs[] = [
        "3714","Alexandra   ","3714"
        ];
        $suburbs[] = [
        "3350","Alfredton   ","3350"
        ];
        $suburbs[] = [
        "3691","Allans Flat     ","3690"
        ];
        $suburbs[] = [
        "3277","Allansford      ","3280"
        ];
        $suburbs[] = [
        "3364","Allendale   ","3465"
        ];
        $suburbs[] = [
        "3305","Allestree   ","3305"
        ];
        $suburbs[] = [
        "3465","Alma    ","3465"
        ];
        $suburbs[] = [
        "3979","Almurta     ","3995"
        ];
        $suburbs[] = [
        "3078","Alphington      ","3072"
        ];
        $suburbs[] = [
        "3018","Altona      ","3018"
        ];
        $suburbs[] = [
        "3028","Altona Meadows  ","3018"
        ];
        $suburbs[] = [
        "3025","Altona North    ","3018"
        ];
        $suburbs[] = [
        "3249","Alvie   ","3260"
        ];
        $suburbs[] = [
        "3377","Amphitheatre    ","3377"
        ];
        $suburbs[] = [
        "3221","Anakie      ","3228"
        ];
        $suburbs[] = [
        "3715","Ancona      ","3722"
        ];
        $suburbs[] = [
        "3230","Anglesea    ","3228"
        ];
        $suburbs[] = [
        "3414","Antwerp     ","3418"
        ];
        $suburbs[] = [
        "3677","Appin Park  ","3677"
        ];
        $suburbs[] = [
        "3319","Apsley      ","3318"
        ];
        $suburbs[] = [
        "3377","Ararat      ","3377"
        ];
        $suburbs[] = [
        "3631","Arcadia     ","3666"
        ];
        $suburbs[] = [
        "3995","Archies Creek   ","3995"
        ];
        $suburbs[] = [
        "3022","Ardeer      ","3020"
        ];
        $suburbs[] = [
        "3629","Ardmona     ","3632"
        ];
        $suburbs[] = [
        "3480","Areegra     ","3393"
        ];
        $suburbs[] = [
        "3143","Armadale    ","3144"
        ];
        $suburbs[] = [
        "3143","Armadale North  ","3144"
        ];
        $suburbs[] = [
        "3551","Arnold      ","3564"
        ];
        $suburbs[] = [
        "3099","Arthurs Creek   ","3088"
        ];
        $suburbs[] = [
        "3936","Arthurs Seat    ","3939"
        ];
        $suburbs[] = [
        "3364","Ascot   ","3465"
        ];
        $suburbs[] = [
        "3032","Ascot Vale  ","3011"
        ];
        $suburbs[] = [
        "3442","Ashbourne   ","3444"
        ];
        $suburbs[] = [
        "3147","Ashburton   ","3150"
        ];
        $suburbs[] = [
        "3147","Ashwood     ","3150"
        ];
        $suburbs[] = [
        "3195","Aspendale   ","3192"
        ];
        $suburbs[] = [
        "3195","Aspendale Gardens   ","3192"
        ];
        $suburbs[] = [
        "3818","Athlone     ","3820"
        ];
        $suburbs[] = [
        "3049","Attwood     ","3047"
        ];
        $suburbs[] = [
        "3664","Avenel      ","3658"
        ];
        $suburbs[] = [
        "3467","Avoca   ","3373"
        ];
        $suburbs[] = [
        "3034","Avondale Heights    ","3039"
        ];
        $suburbs[] = [
        "3782","Avonsleigh      ","3809"
        ];
        $suburbs[] = [
        "3551","Axedale     ","3564"
        ];
        $suburbs[] = [
        "3747","Baarmutha   ","3747"
        ];
        $suburbs[] = [
        "3340","Bacchus Marsh 3340,Bacchus Marsh    ","3337"
        ];
        $suburbs[] = [
        "3670","Baddaginnie     ","3672"
        ];
        $suburbs[] = [
        "3608","Bailieston      ","3666"
        ];
        $suburbs[] = [
        "3875","Bairnsdale      ","3875"
        ];
        $suburbs[] = [
        "3354","Bakery Hill     ","3377"
        ];
        $suburbs[] = [
        "3183","Balaclava   ","3162"
        ];
        $suburbs[] = [
        "3342","Ballan      ","3331"
        ];
        $suburbs[] = [
        "3350","Ballarat    ","3350"
        ];
        $suburbs[] = [
        "3353","Ballarat    ","3377"
        ];
        $suburbs[] = [
        "3354","Ballarat Mc     ","3377"
        ];
        $suburbs[] = [
        "3350","Ballarat North  ","3350"
        ];
        $suburbs[] = [
        "3350","Ballarat West   ","3350"
        ];
        $suburbs[] = [
        "3340","Balliang    ","3337"
        ];
        $suburbs[] = [
        "3666","Balmattum   ","3666"
        ];
        $suburbs[] = [
        "3407","Balmoral    ","3300"
        ];
        $suburbs[] = [
        "3926","Balnarring      ","3939"
        ];
        $suburbs[] = [
        "3971","Balook      ","3850"
        ];
        $suburbs[] = [
        "3103","Balwyn      ","3124"
        ];
        $suburbs[] = [
        "3104","Balwyn North    ","3124"
        ];
        $suburbs[] = [
        "3561","Bamawm      ","3564"
        ];
        $suburbs[] = [
        "3241","Bambra      ","3228"
        ];
        $suburbs[] = [
        "3694","Bandiana Milpo  ","3192"
        ];
        $suburbs[] = [
        "3175","Bangholme   ","3175"
        ];
        $suburbs[] = [
        "3331","Bannockburn     ","3331"
        ];
        $suburbs[] = [
        "3388","Banyena     ","3393"
        ];
        $suburbs[] = [
        "3084","Banyule     ","3079"
        ];
        $suburbs[] = [
        "3691","Baranduda   ","3690"
        ];
        $suburbs[] = [
        "3463","Baringhup   ","3450"
        ];
        $suburbs[] = [
        "3451","Barkers Creek   ","3460"
        ];
        $suburbs[] = [
        "3381","Barkly      ","3377"
        ];
        $suburbs[] = [
        "3352","Barkstead   ","3350"
        ];
        $suburbs[] = [
        "3639","Barmah      ","3643"
        ];
        $suburbs[] = [
        "3557","Barnadown   ","3564"
        ];
        $suburbs[] = [
        "3688","Barnawartha     ","3747"
        ];
        $suburbs[] = [
        "3249","Barongarook     ","3260"
        ];
        $suburbs[] = [
        "3221","Barrabool   ","3228"
        ];
        $suburbs[] = [
        "3249","Barramunga      ","3260"
        ];
        $suburbs[] = [
        "3329","Barunah Park    ","3331"
        ];
        $suburbs[] = [
        "3243","Barwon Downs    ","3250"
        ];
        $suburbs[] = [
        "3227","Barwon Heads    ","3228"
        ];
        $suburbs[] = [
        "3991","Bass    ","3995"
        ];
        $suburbs[] = [
        "3221","Batesford   ","3228"
        ];
        $suburbs[] = [
        "3911","Baxter      ","3199"
        ];
        $suburbs[] = [
        "3375","Bayindeen   ","3377"
        ];
        $suburbs[] = [
        "3981","Bayles      ","3809"
        ];
        $suburbs[] = [
        "3153","Bayswater   ","3152"
        ];
        $suburbs[] = [
        "3153","Bayswater North     ","3152"
        ];
        $suburbs[] = [
        "3807","Beaconsfield    ","3805"
        ];
        $suburbs[] = [
        "3808","Beaconsfield Upper  ","3809"
        ];
        $suburbs[] = [
        "3475","Bealiba     ","3465"
        ];
        $suburbs[] = [
        "3373","Beaufort    ","3377"
        ];
        $suburbs[] = [
        "3193","Beaumaris   ","3191"
        ];
        $suburbs[] = [
        "3135","Bedford Road    ","3134"
        ];
        $suburbs[] = [
        "3251","Beeac   ","3260"
        ];
        $suburbs[] = [
        "3237","Beech Forest    ","3260"
        ];
        $suburbs[] = [
        "3747","Beechworth      ","3747"
        ];
        $suburbs[] = [
        "3160","Belgrave    ","3140"
        ];
        $suburbs[] = [
        "3215","Bell Park   ","3220"
        ];
        $suburbs[] = [
        "3215","Bell Post Hill  ","3220"
        ];
        $suburbs[] = [
        "3221","Bellarine   ","3228"
        ];
        $suburbs[] = [
        "3228","Bellbrae    ","3228"
        ];
        $suburbs[] = [
        "3691","Bellbridge      ","3690"
        ];
        $suburbs[] = [
        "3216","Belmont     ","3220"
        ];
        $suburbs[] = [
        "3198","Belvedere Park  ","3199"
        ];
        $suburbs[] = [
        "3889","Bemm River  ","3875"
        ];
        $suburbs[] = [
        "3946","Bena    ","3953"
        ];
        $suburbs[] = [
        "3671","Benalla     ","3722"
        ];
        $suburbs[] = [
        "3672","Benalla     ","3672"
        ];
        $suburbs[] = [
        "3673","Benalla     ","3722"
        ];
        $suburbs[] = [
        "3900","Benambra    ","3875"
        ];
        $suburbs[] = [
        "3630","Benarch     ","3632"
        ];
        $suburbs[] = [
        "3319","Benayeo     ","3318"
        ];
        $suburbs[] = [
        "3097","Bend Of Islands ","3088"
        ];
        $suburbs[] = [
        "3550","Bendigo     ","3550"
        ];
        $suburbs[] = [
        "3552","Bendigo     ","3350"
        ];
        $suburbs[] = [
        "3554","Bendigo Dc  ","3840"
        ];
        $suburbs[] = [
        "3888","Bendoc      ","3875"
        ];
        $suburbs[] = [
        "3875","Bengworden      ","3875"
        ];
        $suburbs[] = [
        "3125","Bennettswood    ","3150"
        ];
        $suburbs[] = [
        "3960","Bennison    ","3953"
        ];
        $suburbs[] = [
        "3204","Bentleigh   ","3162"
        ];
        $suburbs[] = [
        "3165","Bentleigh East  ","3162"
        ];
        $suburbs[] = [
        "3342","Beremboke   ","3331"
        ];
        $suburbs[] = [
        "3518","Berrimal    ","3527"
        ];
        $suburbs[] = [
        "3351","Berringa    ","3377"
        ];
        $suburbs[] = [
        "3691","Berringama      ","3690"
        ];
        $suburbs[] = [
        "3531","Berriwillock    ","3527"
        ];
        $suburbs[] = [
        "3323","Berrybank   ","3260"
        ];
        $suburbs[] = [
        "3953","Berrys Creek    ","3820"
        ];
        $suburbs[] = [
        "3806","Berwick     ","3805"
        ];
        $suburbs[] = [
        "3472","Bet Bet     ","3465"
        ];
        $suburbs[] = [
        "3691","Bethanga    ","3690"
        ];
        $suburbs[] = [
        "3472","Betley      ","3465"
        ];
        $suburbs[] = [
        "3395","Beulah      ","3418"
        ];
        $suburbs[] = [
        "3590","Beverford   ","3585"
        ];
        $suburbs[] = [
        "3753","Beveridge   ","3752"
        ];
        $suburbs[] = [
        "3707","Biggara     ","3700"
        ];
        $suburbs[] = [
        "3966","Binginwarri     ","3953"
        ];
        $suburbs[] = [
        "3483","Birchip     ","3527"
        ];
        $suburbs[] = [
        "3242","Birregurra      ","3228"
        ];
        $suburbs[] = [
        "3918","Bittern     ","3939"
        ];
        $suburbs[] = [
        "3350","Black Hill  ","3350"
        ];
        $suburbs[] = [
        "3193","Black Rock  ","3191"
        ];
        $suburbs[] = [
        "3130","Blackburn   ","3131"
        ];
        $suburbs[] = [
        "3130","Blackburn North     ","3131"
        ];
        $suburbs[] = [
        "3130","Blackburn South     ","3131"
        ];
        $suburbs[] = [
        "3458","Blackwood   ","3444"
        ];
        $suburbs[] = [
        "3942","Blairgowrie     ","3939"
        ];
        $suburbs[] = [
        "3342","Blakeville      ","3331"
        ];
        $suburbs[] = [
        "3364","Blampied    ","3465"
        ];
        $suburbs[] = [
        "3980","Blind Bight     ","3805"
        ];
        $suburbs[] = [
        "3352","Blowhard    ","3350"
        ];
        $suburbs[] = [
        "3699","Bogong      ","3741"
        ];
        $suburbs[] = [
        "3669","Boho South  ","3666"
        ];
        $suburbs[] = [
        "3860","Boisdale    ","3850"
        ];
        $suburbs[] = [
        "3432","Bolinda     ","3444"
        ];
        $suburbs[] = [
        "3546","Bolton      ","3585"
        ];
        $suburbs[] = [
        "3305","Bolwarra    ","3305"
        ];
        $suburbs[] = [
        "3352","Bolwarrah   ","3350"
        ];
        $suburbs[] = [
        "3888","Bonang      ","3875"
        ];
        $suburbs[] = [
        "3196","Bonbeach    ","3192"
        ];
        $suburbs[] = [
        "3691","Bonegilla   ","3690"
        ];
        $suburbs[] = [
        "3720","Bonnie Doon     ","3722"
        ];
        $suburbs[] = [
        "3870","Boolarra    ","3840"
        ];
        $suburbs[] = [
        "3265","Boorcan     ","3260"
        ];
        $suburbs[] = [
        "3678","Boorhaman   ","3643"
        ];
        $suburbs[] = [
        "3685","Boorhaman North     ","3747"
        ];
        $suburbs[] = [
        "3537","Boort   ","3579"
        ];
        $suburbs[] = [
        "3155","Boronia     ","3152"
        ];
        $suburbs[] = [
        "3518","Borung      ","3527"
        ];
        $suburbs[] = [
        "3599","Boundary Bend   ","3585"
        ];
        $suburbs[] = [
        "3735","Bowmans Forest  ","3677"
        ];
        $suburbs[] = [
        "3128","Box Hill    ","3131"
        ];
        $suburbs[] = [
        "3129","Box Hill North  ","3131"
        ];
        $suburbs[] = [
        "3128","Box Hill South  ","3131"
        ];
        $suburbs[] = [
        "3725","Boxwood     ","3672"
        ];
        $suburbs[] = [
        "3195","Braeside    ","3192"
        ];
        $suburbs[] = [
        "3630","Branditt    ","3632"
        ];
        $suburbs[] = [
        "3302","Branxholme      ","3305"
        ];
        $suburbs[] = [
        "3019","Braybrook   ","3011"
        ];
        $suburbs[] = [
        "3219","Breakwater      ","3220"
        ];
        $suburbs[] = [
        "3227","Breamlea    ","3228"
        ];
        $suburbs[] = [
        "3131","Brentford Square    ","3108"
        ];
        $suburbs[] = [
        "3860","Briagolong      ","3850"
        ];
        $suburbs[] = [
        "3088","Briar Hill  ","3079"
        ];
        $suburbs[] = [
        "3516","Bridgewater On Loddon   ","3550"
        ];
        $suburbs[] = [
        "3741","Bright      ","3741"
        ];
        $suburbs[] = [
        "3186","Brighton    ","3191"
        ];
        $suburbs[] = [
        "3187","Brighton East   ","3191"
        ];
        $suburbs[] = [
        "3184","Brighton Road   ","3182"
        ];
        $suburbs[] = [
        "3391","Brim    ","3393"
        ];
        $suburbs[] = [
        "3658","Broadford   ","3658"
        ];
        $suburbs[] = [
        "3047","Broadmeadows    ","3047"
        ];
        $suburbs[] = [
        "3301","Broadwater      ","3305"
        ];
        $suburbs[] = [
        "3338","Brookfield      ","3337"
        ];
        $suburbs[] = [
        "3012","Brooklyn    ","3011"
        ];
        $suburbs[] = [
        "3364","Broomfield      ","3465"
        ];
        $suburbs[] = [
        "3350","Brown Hill  ","3350"
        ];
        $suburbs[] = [
        "3685","Browns Plains   ","3747"
        ];
        $suburbs[] = [
        "3056","Brunswick   ","3058"
        ];
        $suburbs[] = [
        "3057","Brunswick East  ","3058"
        ];
        $suburbs[] = [
        "3055","Brunswick West  ","3058"
        ];
        $suburbs[] = [
        "3885","Bruthen     ","3875"
        ];
        $suburbs[] = [
        "3375","Buangor     ","3377"
        ];
        $suburbs[] = [
        "3885","Buchan      ","3875"
        ];
        $suburbs[] = [
        "3240","Buckley     ","3228"
        ];
        $suburbs[] = [
        "3958","Buffalo     ","3953"
        ];
        $suburbs[] = [
        "3737","Buffalo River   ","3747"
        ];
        $suburbs[] = [
        "3428","Bulla   ","3047"
        ];
        $suburbs[] = [
        "3352","Bullarook   ","3350"
        ];
        $suburbs[] = [
        "3461","Bullarto    ","3444"
        ];
        $suburbs[] = [
        "3105","Bulleen     ","3108"
        ];
        $suburbs[] = [
        "3437","Bullengarook    ","3444"
        ];
        $suburbs[] = [
        "3821","Buln Buln   ","3820"
        ];
        $suburbs[] = [
        "3634","Bunbartha   ","3643"
        ];
        $suburbs[] = [
        "3851","Bundalaguah     ","3850"
        ];
        $suburbs[] = [
        "3730","Bundalong   ","3643"
        ];
        $suburbs[] = [
        "3083","Bundoora    ","3072"
        ];
        $suburbs[] = [
        "3260","Bungador    ","3260"
        ];
        $suburbs[] = [
        "3352","Bungaree    ","3350"
        ];
        $suburbs[] = [
        "3726","Bungeet     ","3672"
        ];
        $suburbs[] = [
        "3357","Buninyong   ","3342"
        ];
        $suburbs[] = [
        "3815","Bunyip      ","3809"
        ];
        $suburbs[] = [
        "3121","Burnley     ","3121"
        ];
        $suburbs[] = [
        "3023","Burnside    ","3337"
        ];
        $suburbs[] = [
        "3709","Burrowye    ","3700"
        ];
        $suburbs[] = [
        "3352","Burrumbeet      ","3350"
        ];
        $suburbs[] = [
        "3125","Burwood     ","3150"
        ];
        $suburbs[] = [
        "3151","Burwood East    ","3131"
        ];
        $suburbs[] = [
        "3151","Burwood Heights     ","3131"
        ];
        $suburbs[] = [
        "3281","Bushfield   ","3280"
        ];
        $suburbs[] = [
        "3885","Butchers Ridge  ","3875"
        ];
        $suburbs[] = [
        "3711","Buxton      ","3714"
        ];
        $suburbs[] = [
        "3301","Byaduk      ","3305"
        ];
        $suburbs[] = [
        "3762","Bylands     ","3444"
        ];
        $suburbs[] = [
        "3617","Byrneside   ","3632"
        ];
        $suburbs[] = [
        "3505","Cabarita    ","3500"
        ];
        $suburbs[] = [
        "3889","Cabbage Tree Creek  ","3875"
        ];
        $suburbs[] = [
        "3023","Cairnlea    ","3337"
        ];
        $suburbs[] = [
        "3984","Caldermeade     ","3995"
        ];
        $suburbs[] = [
        "3556","California Gully    ","3550"
        ];
        $suburbs[] = [
        "3573","Calivil     ","3564"
        ];
        $suburbs[] = [
        "3844","Callignee   ","3840"
        ];
        $suburbs[] = [
        "3875","Calulu      ","3875"
        ];
        $suburbs[] = [
        "3124","Camberwell      ","3124"
        ];
        $suburbs[] = [
        "3126","Camberwell East     ","3124"
        ];
        $suburbs[] = [
        "3124","Camberwell North    ","3124"
        ];
        $suburbs[] = [
        "3124","Camberwell South    ","3124"
        ];
        $suburbs[] = [
        "3124","Camberwell West     ","3124"
        ];
        $suburbs[] = [
        "3352","Cambrian Hill   ","3350"
        ];
        $suburbs[] = [
        "3061","Campbellfield   ","3047"
        ];
        $suburbs[] = [
        "3381","Campbells Bridge    ","3377"
        ];
        $suburbs[] = [
        "3451","Campbells Creek     ","3460"
        ];
        $suburbs[] = [
        "3556","Campbells Forest    ","3550"
        ];
        $suburbs[] = [
        "3364","Campbelltown    ","3465"
        ];
        $suburbs[] = [
        "3260","Camperdown      ","3260"
        ];
        $suburbs[] = [
        "3350","Canadian    ","3350"
        ];
        $suburbs[] = [
        "3630","Caniambo    ","3632"
        ];
        $suburbs[] = [
        "3890","Cann River  ","3875"
        ];
        $suburbs[] = [
        "3540","Cannie      ","3579"
        ];
        $suburbs[] = [
        "3977","Cannons Creek   ","3199"
        ];
        $suburbs[] = [
        "3126","Canterbury      ","3124"
        ];
        $suburbs[] = [
        "3351","Cape Clear  ","3377"
        ];
        $suburbs[] = [
        "3995","Cape Paterson   ","3995"
        ];
        $suburbs[] = [
        "3925","Cape Woolamai   ","3995"
        ];
        $suburbs[] = [
        "3274","Caramut     ","3300"
        ];
        $suburbs[] = [
        "3312","Carapook    ","3318"
        ];
        $suburbs[] = [
        "3352","Cardigan    ","3350"
        ];
        $suburbs[] = [
        "3978","Cardinia    ","3805"
        ];
        $suburbs[] = [
        "3496","Cardross    ","3500"
        ];
        $suburbs[] = [
        "3464","Carisbrook      ","3465"
        ];
        $suburbs[] = [
        "3239","Carlisle River  ","3260"
        ];
        $suburbs[] = [
        "3442","Carlsruhe   ","3444"
        ];
        $suburbs[] = [
        "3053","Carlton     ","3000"
        ];
        $suburbs[] = [
        "3054","Carlton North   ","3121"
        ];
        $suburbs[] = [
        "3053","Carlton South   ","3000"
        ];
        $suburbs[] = [
        "3163","Carnegie    ","3162"
        ];
        $suburbs[] = [
        "3351","Carngham    ","3377"
        ];
        $suburbs[] = [
        "3023","Caroline Springs    ","3337"
        ];
        $suburbs[] = [
        "3844","Carrajung   ","3840"
        ];
        $suburbs[] = [
        "3874","Carrajung South     ","3850"
        ];
        $suburbs[] = [
        "3361","Carranballac    ","3377"
        ];
        $suburbs[] = [
        "3197","Carrum      ","3192"
        ];
        $suburbs[] = [
        "3201","Carrum Downs    ","3199"
        ];
        $suburbs[] = [
        "3494","Carwarp     ","3500"
        ];
        $suburbs[] = [
        "3311","Casterton   ","3305"
        ];
        $suburbs[] = [
        "3450","Castlemaine     ","3450"
        ];
        $suburbs[] = [
        "3981","Catani      ","3809"
        ];
        $suburbs[] = [
        "3714","Cathkin     ","3714"
        ];
        $suburbs[] = [
        "3162","Caulfield   ","3162"
        ];
        $suburbs[] = [
        "3145","Caulfield East  ","3144"
        ];
        $suburbs[] = [
        "3161","Caulfield Junction  ","3162"
        ];
        $suburbs[] = [
        "3161","Caulfield North     ","3162"
        ];
        $suburbs[] = [
        "3162","Caulfield South     ","3162"
        ];
        $suburbs[] = [
        "3314","Cavendish   ","3300"
        ];
        $suburbs[] = [
        "3145","Central Park    ","3144"
        ];
        $suburbs[] = [
        "3221","Ceres   ","3228"
        ];
        $suburbs[] = [
        "3148","Chadstone   ","3150"
        ];
        $suburbs[] = [
        "3239","Chapple Vale    ","3260"
        ];
        $suburbs[] = [
        "3695","Charleroi   ","3747"
        ];
        $suburbs[] = [
        "3525","Charlton    ","3527"
        ];
        $suburbs[] = [
        "3379","Chatsworth      ","3377"
        ];
        $suburbs[] = [
        "3196","Chelsea     ","3192"
        ];
        $suburbs[] = [
        "3196","Chelsea Heights     ","3192"
        ];
        $suburbs[] = [
        "3192","Cheltenham      ","3191"
        ];
        $suburbs[] = [
        "3192","Cheltenham East     ","3191"
        ];
        $suburbs[] = [
        "3351","Chepstowe   ","3377"
        ];
        $suburbs[] = [
        "3678","Cheshunt    ","3643"
        ];
        $suburbs[] = [
        "3312","Chetwynd    ","3318"
        ];
        $suburbs[] = [
        "3451","Chewton     ","3460"
        ];
        $suburbs[] = [
        "3824","Childers    ","3820"
        ];
        $suburbs[] = [
        "3683","Chiltern    ","3747"
        ];
        $suburbs[] = [
        "3546","Chinkapook      ","3585"
        ];
        $suburbs[] = [
        "3116","Chirnside Park  ","3140"
        ];
        $suburbs[] = [
        "3775","Christmas Hills     ","3088"
        ];
        $suburbs[] = [
        "3842","Churchill   ","3840"
        ];
        $suburbs[] = [
        "3352","Clarendon   ","3350"
        ];
        $suburbs[] = [
        "3169","Clarinda    ","3192"
        ];
        $suburbs[] = [
        "3430","Clarkefield     ","3047"
        ];
        $suburbs[] = [
        "3352","Clarkes Hill    ","3350"
        ];
        $suburbs[] = [
        "3168","Clayton     ","3150"
        ];
        $suburbs[] = [
        "3169","Clayton South   ","3192"
        ];
        $suburbs[] = [
        "3782","Clematis    ","3809"
        ];
        $suburbs[] = [
        "3068","Clifton Hill    ","3121"
        ];
        $suburbs[] = [
        "3222","Clifton Springs     ","3220"
        ];
        $suburbs[] = [
        "3658","Clonbinane      ","3658"
        ];
        $suburbs[] = [
        "3889","Club Terrace    ","3875"
        ];
        $suburbs[] = [
        "3370","Clunes      ","3465"
        ];
        $suburbs[] = [
        "3978","Clyde   ","3805"
        ];
        $suburbs[] = [
        "3825","Coalville   ","3840"
        ];
        $suburbs[] = [
        "3165","Coatesville     ","3162"
        ];
        $suburbs[] = [
        "3266","Cobden      ","3260"
        ];
        $suburbs[] = [
        "3643","Cobram      ","3722"
        ];
        $suburbs[] = [
        "3644","Cobram      ","3643"
        ];
        $suburbs[] = [
        "3058","Coburg      ","3072"
        ];
        $suburbs[] = [
        "3058","Coburg North    ","3072"
        ];
        $suburbs[] = [
        "3781","Cockatoo    ","3809"
        ];
        $suburbs[] = [
        "3364","Coghills Creek  ","3465"
        ];
        $suburbs[] = [
        "3568","Cohuna      ","3579"
        ];
        $suburbs[] = [
        "3340","Coimadai    ","3337"
        ];
        $suburbs[] = [
        "3250","Colac   ","3250"
        ];
        $suburbs[] = [
        "3707","Colac Colac     ","3700"
        ];
        $suburbs[] = [
        "3559","Colbinabbin     ","3564"
        ];
        $suburbs[] = [
        "3770","Coldstream      ","3140"
        ];
        $suburbs[] = [
        "3315","Coleraine   ","3318"
        ];
        $suburbs[] = [
        "3494","Colignan    ","3500"
        ];
        $suburbs[] = [
        "3066","Collingwood     ","3121"
        ];
        $suburbs[] = [
        "8003","Collins Street East ","#N/A"
        ];
        $suburbs[] = [
        "8007","Collins Street West ","3318"
        ];
        $suburbs[] = [
        "3630","Colliver    ","3632"
        ];
        $suburbs[] = [
        "3889","Combienbar      ","3875"
        ];
        $suburbs[] = [
        "3556","Comet Hill  ","3550"
        ];
        $suburbs[] = [
        "3303","Condah      ","3305"
        ];
        $suburbs[] = [
        "3633","Congupna    ","3632"
        ];
        $suburbs[] = [
        "3227","Connewarre      ","3228"
        ];
        $suburbs[] = [
        "3318","Connewirricoo   ","3318"
        ];
        $suburbs[] = [
        "3048","Coolaroo    ","3047"
        ];
        $suburbs[] = [
        "3616","Cooma   ","3632"
        ];
        $suburbs[] = [
        "3629","Coomboona   ","3632"
        ];
        $suburbs[] = [
        "3814","Cora Lynn   ","3809"
        ];
        $suburbs[] = [
        "3480","Corack      ","3393"
        ];
        $suburbs[] = [
        "3249","Coragulac   ","3260"
        ];
        $suburbs[] = [
        "3352","Corindhap   ","3350"
        ];
        $suburbs[] = [
        "3984","Corinella   ","3995"
        ];
        $suburbs[] = [
        "3214","Corio   ","3220"
        ];
        $suburbs[] = [
        "3984","Coronet Bay     ","3995"
        ];
        $suburbs[] = [
        "3559","Corop   ","3564"
        ];
        $suburbs[] = [
        "3254","Cororooke   ","3250"
        ];
        $suburbs[] = [
        "3707","Corryong    ","3700"
        ];
        $suburbs[] = [
        "3249","Corunnun    ","3260"
        ];
        $suburbs[] = [
        "3631","Cosgrove    ","3666"
        ];
        $suburbs[] = [
        "3523","Costerfield     ","3658"
        ];
        $suburbs[] = [
        "3099","Cottles Bridge  ","3088"
        ];
        $suburbs[] = [
        "3506","Cowangie    ","3500"
        ];
        $suburbs[] = [
        "3922","Cowes   ","3995"
        ];
        $suburbs[] = [
        "3857","Cowwarr     ","3840"
        ];
        $suburbs[] = [
        "3465","Craigie     ","3465"
        ];
        $suburbs[] = [
        "3064","Craigieburn     ","3752"
        ];
        $suburbs[] = [
        "3977","Cranbourne      ","3199"
        ];
        $suburbs[] = [
        "3977","Cranbourne North    ","3199"
        ];
        $suburbs[] = [
        "3977","Cranbourne South    ","3199"
        ];
        $suburbs[] = [
        "3669","Creek Junction  ","3666"
        ];
        $suburbs[] = [
        "3666","Creighton   ","3666"
        ];
        $suburbs[] = [
        "3121","Cremorne    ","3121"
        ];
        $suburbs[] = [
        "3322","Cressy      ","3331"
        ];
        $suburbs[] = [
        "3363","Creswick    ","3460"
        ];
        $suburbs[] = [
        "3919","Crib Point  ","3939"
        ];
        $suburbs[] = [
        "3193","Cromer      ","3191"
        ];
        $suburbs[] = [
        "3377","Crowlands   ","3377"
        ];
        $suburbs[] = [
        "3136","Croydon     ","3134"
        ];
        $suburbs[] = [
        "3136","Croydon Hills   ","3134"
        ];
        $suburbs[] = [
        "3136","Croydon North   ","3134"
        ];
        $suburbs[] = [
        "3136","Croydon South   ","3134"
        ];
        $suburbs[] = [
        "3265","Cudgee      ","3260"
        ];
        $suburbs[] = [
        "3705","Cudgewa     ","3700"
        ];
        $suburbs[] = [
        "3530","Culgoa      ","3527"
        ];
        $suburbs[] = [
        "3496","Cullulleraine   ","3500"
        ];
        $suburbs[] = [
        "3251","Cundare North   ","3260"
        ];
        $suburbs[] = [
        "3268","Curdie Vale     ","3260"
        ];
        $suburbs[] = [
        "3268","Curdies River   ","3260"
        ];
        $suburbs[] = [
        "3222","Curlewis    ","3220"
        ];
        $suburbs[] = [
        "3385","Dadswells Bridge    ","3402"
        ];
        $suburbs[] = [
        "3465","Daisy Hill  ","3465"
        ];
        $suburbs[] = [
        "3047","Dallas      ","3047"
        ];
        $suburbs[] = [
        "3981","Dalmore     ","3809"
        ];
        $suburbs[] = [
        "3992","Dalyston    ","3995"
        ];
        $suburbs[] = [
        "3175","Dandenong   ","3175"
        ];
        $suburbs[] = [
        "3164","Dandenong South     ","3465"
        ];
        $suburbs[] = [
        "3175","Dandenong South     ","3175"
        ];
        $suburbs[] = [
        "3737","Dandongadale    ","3747"
        ];
        $suburbs[] = [
        "3862","Dargo   ","3850"
        ];
        $suburbs[] = [
        "3871","Darlimurla      ","3840"
        ];
        $suburbs[] = [
        "3145","Darling     ","3144"
        ];
        $suburbs[] = [
        "3271","Darlington      ","3377"
        ];
        $suburbs[] = [
        "3822","Darnum      ","3820"
        ];
        $suburbs[] = [
        "3756","Darraweit Guim  ","3444"
        ];
        $suburbs[] = [
        "3851","Darriman    ","3850"
        ];
        $suburbs[] = [
        "3304","Dartmoor    ","3305"
        ];
        $suburbs[] = [
        "3701","Dartmouth   ","3700"
        ];
        $suburbs[] = [
        "3460","Daylesford      ","3460"
        ];
        $suburbs[] = [
        "3217","Deakin University   ","3228"
        ];
        $suburbs[] = [
        "3352","Dean    ","3350"
        ];
        $suburbs[] = [
        "3235","Deans Marsh     ","3228"
        ];
        $suburbs[] = [
        "3691","Dederang    ","3690"
        ];
        $suburbs[] = [
        "3023","Deer Park   ","3337"
        ];
        $suburbs[] = [
        "3022","Deer Park East  ","3020"
        ];
        $suburbs[] = [
        "3356","Delacombe   ","3350"
        ];
        $suburbs[] = [
        "3037","Delahey     ","3337"
        ];
        $suburbs[] = [
        "3186","Dendy   ","3191"
        ];
        $suburbs[] = [
        "3280","Dennington      ","3280"
        ];
        $suburbs[] = [
        "3516","Derby   ","3550"
        ];
        $suburbs[] = [
        "3352","Dereel      ","3350"
        ];
        $suburbs[] = [
        "3312","Dergholm    ","3318"
        ];
        $suburbs[] = [
        "3030","Derrimut    ","3030"
        ];
        $suburbs[] = [
        "3325","Derrinallum     ","3260"
        ];
        $suburbs[] = [
        "3726","Devenish    ","3672"
        ];
        $suburbs[] = [
        "3977","Devon Meadows   ","3199"
        ];
        $suburbs[] = [
        "3971","Devon North     ","3850"
        ];
        $suburbs[] = [
        "3610","Dhurringile     ","3666"
        ];
        $suburbs[] = [
        "3089","Diamond Creek   ","3088"
        ];
        $suburbs[] = [
        "3309","Digby   ","3305"
        ];
        $suburbs[] = [
        "3427","Diggers Rest    ","3337"
        ];
        $suburbs[] = [
        "3414","Dimboola    ","3418"
        ];
        $suburbs[] = [
        "3571","Dingee      ","3518"
        ];
        $suburbs[] = [
        "3172","Dingley Village     ","3175"
        ];
        $suburbs[] = [
        "3898","Dinner Plain    ","3741"
        ];
        $suburbs[] = [
        "3775","Dixons Creek    ","3088"
        ];
        $suburbs[] = [
        "3008","Docklands   ","3000"
        ];
        $suburbs[] = [
        "3480","Donald      ","3393"
        ];
        $suburbs[] = [
        "3108","Doncaster   ","3108"
        ];
        $suburbs[] = [
        "3109","Doncaster East  ","3108"
        ];
        $suburbs[] = [
        "3109","Doncaster Heights   ","3108"
        ];
        $suburbs[] = [
        "3064","Donnybrook      ","3752"
        ];
        $suburbs[] = [
        "3111","Donvale     ","3108"
        ];
        $suburbs[] = [
        "3401","Dooen   ","3402"
        ];
        $suburbs[] = [
        "3646","Dookie      ","3666"
        ];
        $suburbs[] = [
        "3647","Dookie College  ","3632"
        ];
        $suburbs[] = [
        "3754","Doreen      ","3752"
        ];
        $suburbs[] = [
        "3401","Douglas     ","3402"
        ];
        $suburbs[] = [
        "3177","Doveton     ","3805"
        ];
        $suburbs[] = [
        "3249","Dreeite     ","3260"
        ];
        $suburbs[] = [
        "3936","Dromana     ","3939"
        ];
        $suburbs[] = [
        "3818","Drouin      ","3820"
        ];
        $suburbs[] = [
        "3461","Drummond    ","3444"
        ];
        $suburbs[] = [
        "3446","Drummond North  ","3444"
        ];
        $suburbs[] = [
        "3222","Drysdale    ","3220"
        ];
        $suburbs[] = [
        "3956","Dumbalk     ","3953"
        ];
        $suburbs[] = [
        "3271","Dundonnell      ","3377"
        ];
        $suburbs[] = [
        "3294","Dunkeld     ","3377"
        ];
        $suburbs[] = [
        "3630","Dunkirk     ","3632"
        ];
        $suburbs[] = [
        "3352","Dunnstown   ","3350"
        ];
        $suburbs[] = [
        "3472","Dunolly     ","3465"
        ];
        $suburbs[] = [
        "3352","Durham Lead     ","3350"
        ];
        $suburbs[] = [
        "3576","Durham Ox   ","3518"
        ];
        $suburbs[] = [
        "3323","Duverney    ","3260"
        ];
        $suburbs[] = [
        "3878","Eagle Point     ","3875"
        ];
        $suburbs[] = [
        "3556","Eaglehawk   ","3550"
        ];
        $suburbs[] = [
        "3084","Eaglemont   ","3079"
        ];
        $suburbs[] = [
        "3219","East Geelong    ","3220"
        ];
        $suburbs[] = [
        "3002","East Melbourne  ","3000"
        ];
        $suburbs[] = [
        "8002","East Melbourne  ","3518"
        ];
        $suburbs[] = [
        "3852","East Sale Raaf  ","3850"
        ];
        $suburbs[] = [
        "3231","Eastern View    ","3228"
        ];
        $suburbs[] = [
        "3691","Ebden   ","3690"
        ];
        $suburbs[] = [
        "3564","Echuca      ","3564"
        ];
        $suburbs[] = [
        "3472","Eddington   ","3465"
        ];
        $suburbs[] = [
        "3757","Eden Park   ","3752"
        ];
        $suburbs[] = [
        "3318","Edenhope    ","3318"
        ];
        $suburbs[] = [
        "3196","Edithvale   ","3192"
        ];
        $suburbs[] = [
        "3713","Eildon      ","3722"
        ];
        $suburbs[] = [
        "3334","Elaine      ","3331"
        ];
        $suburbs[] = [
        "3746","Eldorado    ","3677"
        ];
        $suburbs[] = [
        "3265","Ellerslie   ","3260"
        ];
        $suburbs[] = [
        "3250","Elliminyt   ","3250"
        ];
        $suburbs[] = [
        "3469","Elmhurst    ","3377"
        ];
        $suburbs[] = [
        "3558","Elmore      ","3564"
        ];
        $suburbs[] = [
        "3448","Elphinstone     ","3450"
        ];
        $suburbs[] = [
        "3185","Elsternwick     ","3162"
        ];
        $suburbs[] = [
        "3095","Eltham      ","3079"
        ];
        $suburbs[] = [
        "3095","Eltham North    ","3079"
        ];
        $suburbs[] = [
        "3184","Elwood      ","3182"
        ];
        $suburbs[] = [
        "3782","Emerald     ","3809"
        ];
        $suburbs[] = [
        "3475","Emu     ","3465"
        ];
        $suburbs[] = [
        "3802","Endeavour Hills     ","3805"
        ];
        $suburbs[] = [
        "3352","Enfield     ","3350"
        ];
        $suburbs[] = [
        "3895","Ensay   ","3875"
        ];
        $suburbs[] = [
        "3551","Eppalock    ","3564"
        ];
        $suburbs[] = [
        "3076","Epping      ","3752"
        ];
        $suburbs[] = [
        "3076","Epping Dc   ","3752"
        ];
        $suburbs[] = [
        "3551","Epsom   ","3564"
        ];
        $suburbs[] = [
        "3825","Erica   ","3840"
        ];
        $suburbs[] = [
        "3701","Eskdale     ","3700"
        ];
        $suburbs[] = [
        "3040","Essendon    ","3039"
        ];
        $suburbs[] = [
        "3041","Essendon North  ","3039"
        ];
        $suburbs[] = [
        "3040","Essendon West   ","3039"
        ];
        $suburbs[] = [
        "3350","Eureka      ","3350"
        ];
        $suburbs[] = [
        "3666","Euroa   ","3666"
        ];
        $suburbs[] = [
        "3739","Eurobin     ","3741"
        ];
        $suburbs[] = [
        "3371","Evansford   ","3465"
        ];
        $suburbs[] = [
        "3678","Everton     ","3643"
        ];
        $suburbs[] = [
        "3338","Exford      ","3337"
        ];
        $suburbs[] = [
        "3078","Fairfield   ","3072"
        ];
        $suburbs[] = [
        "3231","Fairhaven   ","3228"
        ];
        $suburbs[] = [
        "3699","Falls Creek     ","3741"
        ];
        $suburbs[] = [
        "3060","Fawkner     ","3058"
        ];
        $suburbs[] = [
        "3458","Fern Hill   ","3444"
        ];
        $suburbs[] = [
        "3864","Fernbank    ","3850"
        ];
        $suburbs[] = [
        "3518","Fernihurst      ","3527"
        ];
        $suburbs[] = [
        "3156","Ferntree Gully  ","3152"
        ];
        $suburbs[] = [
        "3786","Ferny Creek     ","3140"
        ];
        $suburbs[] = [
        "3939","Fingal      ","3939"
        ];
        $suburbs[] = [
        "3959","Fish Creek  ","3953"
        ];
        $suburbs[] = [
        "3065","Fitzroy     ","3121"
        ];
        $suburbs[] = [
        "3068","Fitzroy North   ","3121"
        ];
        $suburbs[] = [
        "3977","Five Ways   ","3199"
        ];
        $suburbs[] = [
        "3031","Flemington      ","3000"
        ];
        $suburbs[] = [
        "3929","Flinders    ","3939"
        ];
        $suburbs[] = [
        "8009","Flinders Lane   ","3632"
        ];
        $suburbs[] = [
        "3717","Flowerdale      ","3714"
        ];
        $suburbs[] = [
        "3844","Flynn   ","3840"
        ];
        $suburbs[] = [
        "3011","Footscray   ","3011"
        ];
        $suburbs[] = [
        "3131","Forest Hill     ","3108"
        ];
        $suburbs[] = [
        "3236","Forrest     ","3250"
        ];
        $suburbs[] = [
        "3960","Foster      ","3953"
        ];
        $suburbs[] = [
        "3557","Fosterville     ","3564"
        ];
        $suburbs[] = [
        "3805","Fountain Gate   ","3805"
        ];
        $suburbs[] = [
        "3265","Framlingham     ","3260"
        ];
        $suburbs[] = [
        "3461","Franklinford    ","3444"
        ];
        $suburbs[] = [
        "3199","Frankston   ","3199"
        ];
        $suburbs[] = [
        "3200","Frankston North     ","3199"
        ];
        $suburbs[] = [
        "3741","Freeburgh   ","3741"
        ];
        $suburbs[] = [
        "3216","Freshwater Creek    ","3220"
        ];
        $suburbs[] = [
        "3451","Fryerstown      ","3460"
        ];
        $suburbs[] = [
        "3221","Fyansford   ","3228"
        ];
        $suburbs[] = [
        "3737","Gapsted     ","3747"
        ];
        $suburbs[] = [
        "3207","Garden City     ","3000"
        ];
        $suburbs[] = [
        "3185","Gardenvale      ","3162"
        ];
        $suburbs[] = [
        "3814","Garfield    ","3809"
        ];
        $suburbs[] = [
        "3265","Garvoc      ","3260"
        ];
        $suburbs[] = [
        "3407","Gatum   ","3300"
        ];
        $suburbs[] = [
        "3220","Geelong     ","3220"
        ];
        $suburbs[] = [
        "3218","Geelong West    ","3331"
        ];
        $suburbs[] = [
        "3885","Gelantipy   ","3875"
        ];
        $suburbs[] = [
        "3239","Gellibrand      ","3260"
        ];
        $suburbs[] = [
        "3237","Gellibrand Lower    ","3260"
        ];
        $suburbs[] = [
        "3971","Gelliondale     ","3850"
        ];
        $suburbs[] = [
        "3783","Gembrook    ","3809"
        ];
        $suburbs[] = [
        "3891","Genoa   ","3875"
        ];
        $suburbs[] = [
        "3418","Gerang Gerung   ","3418"
        ];
        $suburbs[] = [
        "3243","Gerangamete     ","3250"
        ];
        $suburbs[] = [
        "3331","Gheringhap      ","3331"
        ];
        $suburbs[] = [
        "3797","Gilderoy    ","3140"
        ];
        $suburbs[] = [
        "3616","Gillieston      ","3632"
        ];
        $suburbs[] = [
        "3841","Gippsland Mc    ","3840"
        ];
        $suburbs[] = [
        "3891","Gipsy Point     ","3875"
        ];
        $suburbs[] = [
        "3624","Girgarre    ","3564"
        ];
        $suburbs[] = [
        "3437","Gisborne    ","3444"
        ];
        $suburbs[] = [
        "3043","Gladstone Park  ","3058"
        ];
        $suburbs[] = [
        "3797","Gladysdale      ","3140"
        ];
        $suburbs[] = [
        "3979","Glen Alvie  ","3995"
        ];
        $suburbs[] = [
        "3691","Glen Creek  ","3690"
        ];
        $suburbs[] = [
        "3990","Glen Forbes     ","3995"
        ];
        $suburbs[] = [
        "3163","Glen Huntly     ","3162"
        ];
        $suburbs[] = [
        "3146","Glen Iris   ","3144"
        ];
        $suburbs[] = [
        "3150","Glen Waverley   ","3150"
        ];
        $suburbs[] = [
        "3717","Glenburn    ","3714"
        ];
        $suburbs[] = [
        "3266","Glenfyne    ","3260"
        ];
        $suburbs[] = [
        "3854","Glengarry   ","3840"
        ];
        $suburbs[] = [
        "3461","Glenlyon    ","3444"
        ];
        $suburbs[] = [
        "3858","Glenmaggie      ","3850"
        ];
        $suburbs[] = [
        "3340","Glenmore    ","3337"
        ];
        $suburbs[] = [
        "3385","Glenorchy   ","3402"
        ];
        $suburbs[] = [
        "3675","Glenrowan   ","3672"
        ];
        $suburbs[] = [
        "3046","Glenroy     ","3058"
        ];
        $suburbs[] = [
        "3293","Glenthompson    ","3377"
        ];
        $suburbs[] = [
        "3221","Gnarwarre   ","3228"
        ];
        $suburbs[] = [
        "3260","Gnotuk      ","3260"
        ];
        $suburbs[] = [
        "3719","Gobur   ","3714"
        ];
        $suburbs[] = [
        "3350","Golden Point    ","3350"
        ];
        $suburbs[] = [
        "3451","Golden Point    ","3460"
        ];
        $suburbs[] = [
        "3465","Golden Point    ","3465"
        ];
        $suburbs[] = [
        "3555","Golden Square   ","3550"
        ];
        $suburbs[] = [
        "3472","Goldsborough    ","3465"
        ];
        $suburbs[] = [
        "3666","Gooram      ","3666"
        ];
        $suburbs[] = [
        "3685","Gooramadda      ","3747"
        ];
        $suburbs[] = [
        "3725","Goorambat   ","3672"
        ];
        $suburbs[] = [
        "3557","Goornong    ","3564"
        ];
        $suburbs[] = [
        "3305","Gorae   ","3305"
        ];
        $suburbs[] = [
        "3345","Gordon      ","3342"
        ];
        $suburbs[] = [
        "3873","Gormandale      ","3850"
        ];
        $suburbs[] = [
        "3412","Goroke      ","3318"
        ];
        $suburbs[] = [
        "3723","Goughs Bay  ","3722"
        ];
        $suburbs[] = [
        "3608","Goulburn Weir   ","3666"
        ];
        $suburbs[] = [
        "3043","Gowanbrae   ","3058"
        ];
        $suburbs[] = [
        "3669","Gowangardie     ","3666"
        ];
        $suburbs[] = [
        "3984","Grantville      ","3995"
        ];
        $suburbs[] = [
        "3701","Granya      ","3700"
        ];
        $suburbs[] = [
        "3281","Grassmere   ","3280"
        ];
        $suburbs[] = [
        "3608","Graytown    ","3666"
        ];
        $suburbs[] = [
        "3377","Great Western   ","3377"
        ];
        $suburbs[] = [
        "3537","Gredgwin    ","3579"
        ];
        $suburbs[] = [
        "3341","Greendale   ","3342"
        ];
        $suburbs[] = [
        "3088","Greensborough   ","3079"
        ];
        $suburbs[] = [
        "3059","Greenvale   ","3047"
        ];
        $suburbs[] = [
        "3675","Greta   ","3672"
        ];
        $suburbs[] = [
        "3216","Grovedale   ","3220"
        ];
        $suburbs[] = [
        "3770","Gruyere     ","3140"
        ];
        $suburbs[] = [
        "3451","Guildford   ","3460"
        ];
        $suburbs[] = [
        "3566","Gunbower    ","3564"
        ];
        $suburbs[] = [
        "3691","Gundowring      ","3690"
        ];
        $suburbs[] = [
        "3850","Guthridge   ","3850"
        ];
        $suburbs[] = [
        "3709","Guys Forest     ","3700"
        ];
        $suburbs[] = [
        "3807","Guys Hill   ","3805"
        ];
        $suburbs[] = [
        "3401","Gymbowen    ","3402"
        ];
        $suburbs[] = [
        "3351","Haddon      ","3377"
        ];
        $suburbs[] = [
        "3046","Hadfield    ","3058"
        ];
        $suburbs[] = [
        "3803","Hallam      ","3805"
        ];
        $suburbs[] = [
        "3381","Halls Gap   ","3377"
        ];
        $suburbs[] = [
        "3953","Hallston    ","3820"
        ];
        $suburbs[] = [
        "3300","Hamilton    ","3300"
        ];
        $suburbs[] = [
        "3215","Hamlyn Heights  ","3220"
        ];
        $suburbs[] = [
        "3188","Hampton     ","3191"
        ];
        $suburbs[] = [
        "3188","Hampton East    ","3191"
        ];
        $suburbs[] = [
        "3188","Hampton North   ","3191"
        ];
        $suburbs[] = [
        "3976","Hampton Park    ","3805"
        ];
        $suburbs[] = [
        "3675","Hansonville     ","3672"
        ];
        $suburbs[] = [
        "3453","Harcourt    ","3450"
        ];
        $suburbs[] = [
        "3806","Harkaway    ","3805"
        ];
        $suburbs[] = [
        "3741","Harrietville    ","3741"
        ];
        $suburbs[] = [
        "3317","Harrow      ","3318"
        ];
        $suburbs[] = [
        "3616","Harston     ","3632"
        ];
        $suburbs[] = [
        "3915","Hastings    ","3939"
        ];
        $suburbs[] = [
        "3287","Hawkesdale      ","3284"
        ];
        $suburbs[] = [
        "3142","Hawksburn   ","3144"
        ];
        $suburbs[] = [
        "3122","Hawthorn    ","3124"
        ];
        $suburbs[] = [
        "3123","Hawthorn East   ","3124"
        ];
        $suburbs[] = [
        "3658","Hazeldene   ","3658"
        ];
        $suburbs[] = [
        "3777","Healesville     ","3714"
        ];
        $suburbs[] = [
        "3981","Heath Hill  ","3809"
        ];
        $suburbs[] = [
        "3523","Heathcote   ","3658"
        ];
        $suburbs[] = [
        "3758","Heathcote Junction  ","3658"
        ];
        $suburbs[] = [
        "3202","Heatherton      ","3192"
        ];
        $suburbs[] = [
        "3135","Heathmont   ","3134"
        ];
        $suburbs[] = [
        "3967","Hedley      ","3953"
        ];
        $suburbs[] = [
        "3084","Heidelberg      ","3079"
        ];
        $suburbs[] = [
        "3081","Heidelberg Heights  ","3079"
        ];
        $suburbs[] = [
        "3081","Heidelberg Rgh  ","3079"
        ];
        $suburbs[] = [
        "3081","Heidelberg West     ","3079"
        ];
        $suburbs[] = [
        "3312","Henty   ","3318"
        ];
        $suburbs[] = [
        "3461","Hepburn Springs     ","3444"
        ];
        $suburbs[] = [
        "3218","Herne Hill  ","3331"
        ];
        $suburbs[] = [
        "3825","Hernes Oak  ","3840"
        ];
        $suburbs[] = [
        "3442","Hesket      ","3444"
        ];
        $suburbs[] = [
        "3273","Hexham      ","3284"
        ];
        $suburbs[] = [
        "3858","Heyfield    ","3850"
        ];
        $suburbs[] = [
        "3304","Heywood     ","3305"
        ];
        $suburbs[] = [
        "3756","Hidden Valley   ","3444"
        ];
        $suburbs[] = [
        "3190","Highett     ","3191"
        ];
        $suburbs[] = [
        "3032","Highpoint City  ","3011"
        ];
        $suburbs[] = [
        "3216","Highton     ","3220"
        ];
        $suburbs[] = [
        "3825","Hill End    ","3840"
        ];
        $suburbs[] = [
        "3351","Hillcrest   ","3377"
        ];
        $suburbs[] = [
        "3037","Hillside    ","3337"
        ];
        $suburbs[] = [
        "3875","Hillside    ","3875"
        ];
        $suburbs[] = [
        "3920","Hmas Cerberus   ","3939"
        ];
        $suburbs[] = [
        "3139","Hoddles Creek   ","3140"
        ];
        $suburbs[] = [
        "3148","Holmesglen      ","3150"
        ];
        $suburbs[] = [
        "3717","Homewood    ","3714"
        ];
        $suburbs[] = [
        "3396","Hopetoun    ","3393"
        ];
        $suburbs[] = [
        "3162","Hopetoun Gardens    ","3162"
        ];
        $suburbs[] = [
        "3029","Hoppers Crossing    ","3030"
        ];
        $suburbs[] = [
        "3238","Hordern Vale    ","3250"
        ];
        $suburbs[] = [
        "3400","Horsham     ","3402"
        ];
        $suburbs[] = [
        "3402","Horsham     ","3350"
        ];
        $suburbs[] = [
        "3741","Hotham Heights  ","3741"
        ];
        $suburbs[] = [
        "3051","Hotham Hill     ","3000"
        ];
        $suburbs[] = [
        "3128","Houston     ","3131"
        ];
        $suburbs[] = [
        "3166","Hughesdale      ","3150"
        ];
        $suburbs[] = [
        "3691","Hume Weir   ","3690"
        ];
        $suburbs[] = [
        "3757","Humevale    ","3752"
        ];
        $suburbs[] = [
        "3558","Hunter      ","3564"
        ];
        $suburbs[] = [
        "3166","Huntingdale     ","3150"
        ];
        $suburbs[] = [
        "3551","Huntly      ","3564"
        ];
        $suburbs[] = [
        "3695","Huon    ","3747"
        ];
        $suburbs[] = [
        "3099","Hurstbridge     ","3088"
        ];
        $suburbs[] = [
        "3351","Illabarook      ","3377"
        ];
        $suburbs[] = [
        "3282","Illowa      ","3280"
        ];
        $suburbs[] = [
        "3223","Indented Head   ","3220"
        ];
        $suburbs[] = [
        "3517","Inglewood   ","3518"
        ];
        $suburbs[] = [
        "3472","Inkerman    ","3465"
        ];
        $suburbs[] = [
        "3636","Invergordon     ","3643"
        ];
        $suburbs[] = [
        "3634","Invergordon South   ","3643"
        ];
        $suburbs[] = [
        "3321","Inverleigh      ","3228"
        ];
        $suburbs[] = [
        "3996","Inverloch   ","3995"
        ];
        $suburbs[] = [
        "3352","Invermay    ","3350"
        ];
        $suburbs[] = [
        "3815","Iona    ","3809"
        ];
        $suburbs[] = [
        "3249","Irrewarra   ","3260"
        ];
        $suburbs[] = [
        "3498","Irymple     ","3500"
        ];
        $suburbs[] = [
        "3079","Ivanhoe     ","3079"
        ];
        $suburbs[] = [
        "3079","Ivanhoe East    ","3079"
        ];
        $suburbs[] = [
        "3047","Jacana      ","3047"
        ];
        $suburbs[] = [
        "3984","Jam Jerrup  ","3995"
        ];
        $suburbs[] = [
        "3723","Jamieson    ","3722"
        ];
        $suburbs[] = [
        "3228","Jan Juc     ","3228"
        ];
        $suburbs[] = [
        "3266","Jancourt    ","3260"
        ];
        $suburbs[] = [
        "3266","Jancourt East   ","3260"
        ];
        $suburbs[] = [
        "3517","Jarklin     ","3518"
        ];
        $suburbs[] = [
        "3840","Jeeralang   ","3840"
        ];
        $suburbs[] = [
        "3945","Jeetho      ","3995"
        ];
        $suburbs[] = [
        "3423","Jeparit     ","3418"
        ];
        $suburbs[] = [
        "3238","Johanna     ","3250"
        ];
        $suburbs[] = [
        "3902","Johnsonville    ","3875"
        ];
        $suburbs[] = [
        "3869","Jumbuk      ","3840"
        ];
        $suburbs[] = [
        "3951","Jumbunna    ","3995"
        ];
        $suburbs[] = [
        "3399","Jung    ","3418"
        ];
        $suburbs[] = [
        "3551","Junortoun   ","3564"
        ];
        $suburbs[] = [
        "3909","Kalimna     ","3875"
        ];
        $suburbs[] = [
        "3064","Kalkallo    ","3752"
        ];
        $suburbs[] = [
        "3791","Kallista    ","3140"
        ];
        $suburbs[] = [
        "3766","Kalorama    ","3140"
        ];
        $suburbs[] = [
        "3555","Kangaroo Flat   ","3550"
        ];
        $suburbs[] = [
        "3097","Kangaroo Ground     ","3088"
        ];
        $suburbs[] = [
        "3419","Kaniva      ","3418"
        ];
        $suburbs[] = [
        "3719","Kanumbra    ","3714"
        ];
        $suburbs[] = [
        "3564","Kanyapella      ","3564"
        ];
        $suburbs[] = [
        "3951","Kardella    ","3995"
        ];
        $suburbs[] = [
        "3199","Karingal    ","3199"
        ];
        $suburbs[] = [
        "3401","Karnak      ","3402"
        ];
        $suburbs[] = [
        "3649","Katamatite      ","3643"
        ];
        $suburbs[] = [
        "3634","Katandra    ","3643"
        ];
        $suburbs[] = [
        "3640","Katunga     ","3643"
        ];
        $suburbs[] = [
        "3249","Kawarren    ","3260"
        ];
        $suburbs[] = [
        "3021","Kealba      ","3020"
        ];
        $suburbs[] = [
        "3036","Keilor      ","3020"
        ];
        $suburbs[] = [
        "3038","Keilor Downs    ","3020"
        ];
        $suburbs[] = [
        "3033","Keilor East     ","3039"
        ];
        $suburbs[] = [
        "3036","Keilor North    ","3020"
        ];
        $suburbs[] = [
        "3042","Keilor Park     ","3039"
        ];
        $suburbs[] = [
        "3239","Kennedys Creek  ","3260"
        ];
        $suburbs[] = [
        "3221","Kennett River   ","3228"
        ];
        $suburbs[] = [
        "3550","Kennington      ","3550"
        ];
        $suburbs[] = [
        "3031","Kensington      ","3000"
        ];
        $suburbs[] = [
        "3073","Keon Park   ","3072"
        ];
        $suburbs[] = [
        "3579","Kerang      ","3579"
        ];
        $suburbs[] = [
        "3691","Kergunyah   ","3690"
        ];
        $suburbs[] = [
        "3979","Kernot      ","3995"
        ];
        $suburbs[] = [
        "3434","Kerrie      ","3444"
        ];
        $suburbs[] = [
        "3129","Kerrimuir   ","3131"
        ];
        $suburbs[] = [
        "3660","Kerrisdale      ","3658"
        ];
        $suburbs[] = [
        "3101","Kew     ","3124"
        ];
        $suburbs[] = [
        "3102","Kew East    ","3124"
        ];
        $suburbs[] = [
        "3173","Keysborough     ","3175"
        ];
        $suburbs[] = [
        "3631","Kialla      ","3666"
        ];
        $suburbs[] = [
        "3631","Kialla East     ","3666"
        ];
        $suburbs[] = [
        "3631","Kialla West     ","3666"
        ];
        $suburbs[] = [
        "3418","Kiata   ","3418"
        ];
        $suburbs[] = [
        "3691","Kiewa   ","3690"
        ];
        $suburbs[] = [
        "3995","Kilcunda    ","3995"
        ];
        $suburbs[] = [
        "3283","Killarney   ","3280"
        ];
        $suburbs[] = [
        "3851","Kilmany     ","3850"
        ];
        $suburbs[] = [
        "3764","Kilmore     ","3444"
        ];
        $suburbs[] = [
        "3137","Kilsyth     ","3134"
        ];
        $suburbs[] = [
        "3137","Kilsyth South   ","3134"
        ];
        $suburbs[] = [
        "3763","Kinglake    ","3714"
        ];
        $suburbs[] = [
        "3757","Kinglake West   ","3752"
        ];
        $suburbs[] = [
        "3021","Kings Park  ","3020"
        ];
        $suburbs[] = [
        "3083","Kingsbury   ","3072"
        ];
        $suburbs[] = [
        "3364","Kingston    ","3465"
        ];
        $suburbs[] = [
        "3012","Kingsville      ","3011"
        ];
        $suburbs[] = [
        "3283","Kirkstall   ","3280"
        ];
        $suburbs[] = [
        "3666","Kithbrook   ","3666"
        ];
        $suburbs[] = [
        "3523","Knowsley    ","3658"
        ];
        $suburbs[] = [
        "3152","Knox City Centre    ","3152"
        ];
        $suburbs[] = [
        "3180","Knoxfield   ","3152"
        ];
        $suburbs[] = [
        "3704","Koetong     ","3700"
        ];
        $suburbs[] = [
        "3265","Kolora      ","3260"
        ];
        $suburbs[] = [
        "3951","Kongwak     ","3995"
        ];
        $suburbs[] = [
        "3981","Koo Wee Rup ","3809"
        ];
        $suburbs[] = [
        "3669","Koonda      ","3666"
        ];
        $suburbs[] = [
        "3580","Koondrook   ","3579"
        ];
        $suburbs[] = [
        "3954","Koonwarra   ","3953"
        ];
        $suburbs[] = [
        "3501","Koorlong    ","3500"
        ];
        $suburbs[] = [
        "3844","Koornalla   ","3840"
        ];
        $suburbs[] = [
        "3144","Kooyong     ","3144"
        ];
        $suburbs[] = [
        "3714","Koriella    ","3714"
        ];
        $suburbs[] = [
        "3282","Koroit      ","3280"
        ];
        $suburbs[] = [
        "3520","Korong Vale     ","3518"
        ];
        $suburbs[] = [
        "3950","Korumburra      ","3820"
        ];
        $suburbs[] = [
        "3461","Korweinguboora      ","3444"
        ];
        $suburbs[] = [
        "3565","Kotta   ","3564"
        ];
        $suburbs[] = [
        "3638","Kotupna     ","3643"
        ];
        $suburbs[] = [
        "3622","Koyuga      ","3564"
        ];
        $suburbs[] = [
        "3621","Koyuga South    ","3564"
        ];
        $suburbs[] = [
        "3945","Krowera     ","3995"
        ];
        $suburbs[] = [
        "3930","Kunyung     ","3939"
        ];
        $suburbs[] = [
        "3337","Kurunjang   ","3337"
        ];
        $suburbs[] = [
        "3619","Kyabram     ","3192"
        ];
        $suburbs[] = [
        "3620","Kyabram     ","3564"
        ];
        $suburbs[] = [
        "3444","Kyneton     ","3658"
        ];
        $suburbs[] = [
        "3463","Laanecoorie     ","3450"
        ];
        $suburbs[] = [
        "3816","Labertouche     ","3809"
        ];
        $suburbs[] = [
        "3130","Laburnum    ","3131"
        ];
        $suburbs[] = [
        "3584","Lake Boga   ","3585"
        ];
        $suburbs[] = [
        "3351","Lake Bolac  ","3377"
        ];
        $suburbs[] = [
        "3581","Lake Charm  ","3579"
        ];
        $suburbs[] = [
        "3312","Lake Mundi  ","3318"
        ];
        $suburbs[] = [
        "3727","Lake Rowan  ","3643"
        ];
        $suburbs[] = [
        "3887","Lake Tyers  ","3875"
        ];
        $suburbs[] = [
        "3909","Lake Tyers Beach    ","3875"
        ];
        $suburbs[] = [
        "3350","Lake Wendouree  ","3350"
        ];
        $suburbs[] = [
        "3909","Lakes Entrance  ","3875"
        ];
        $suburbs[] = [
        "3352","Lal Lal     ","3350"
        ];
        $suburbs[] = [
        "3542","Lalbert     ","3579"
        ];
        $suburbs[] = [
        "3075","Lalor   ","3752"
        ];
        $suburbs[] = [
        "3620","Lancaster   ","3564"
        ];
        $suburbs[] = [
        "3435","Lancefield      ","3444"
        ];
        $suburbs[] = [
        "3384","Landsborough    ","3373"
        ];
        $suburbs[] = [
        "3984","Lang Lang   ","3995"
        ];
        $suburbs[] = [
        "3318","Langkoop    ","3318"
        ];
        $suburbs[] = [
        "3910","Langwarrin      ","3199"
        ];
        $suburbs[] = [
        "3212","Lara    ","3220"
        ];
        $suburbs[] = [
        "3249","Larpent     ","3260"
        ];
        $suburbs[] = [
        "3487","Lascelles   ","3393"
        ];
        $suburbs[] = [
        "3139","Launching Place     ","3140"
        ];
        $suburbs[] = [
        "3238","Lavers Hill     ","3250"
        ];
        $suburbs[] = [
        "3028","Laverton    ","3018"
        ];
        $suburbs[] = [
        "3026","Laverton North  ","3030"
        ];
        $suburbs[] = [
        "8010","Law Courts  ","3632"
        ];
        $suburbs[] = [
        "3415","Lawloit     ","3318"
        ];
        $suburbs[] = [
        "3352","Learmonth   ","3350"
        ];
        $suburbs[] = [
        "3516","Leichardt   ","3550"
        ];
        $suburbs[] = [
        "3352","Leigh Creek     ","3350"
        ];
        $suburbs[] = [
        "3567","Leitchville     ","3579"
        ];
        $suburbs[] = [
        "3631","Lemnos      ","3666"
        ];
        $suburbs[] = [
        "3691","Leneva      ","3690"
        ];
        $suburbs[] = [
        "3953","Leongatha   ","3820"
        ];
        $suburbs[] = [
        "3224","Leopold     ","3220"
        ];
        $suburbs[] = [
        "3458","Lerderderg      ","3444"
        ];
        $suburbs[] = [
        "3332","Lethbridge      ","3331"
        ];
        $suburbs[] = [
        "3352","Lexton      ","3350"
        ];
        $suburbs[] = [
        "3858","Licola      ","3850"
        ];
        $suburbs[] = [
        "3420","Lillimur    ","3318"
        ];
        $suburbs[] = [
        "3140","Lilydale    ","3140"
        ];
        $suburbs[] = [
        "3673","Lima    ","3722"
        ];
        $suburbs[] = [
        "3865","Lindenow    ","3875"
        ];
        $suburbs[] = [
        "3875","Lindenow South  ","3875"
        ];
        $suburbs[] = [
        "3360","Linton      ","3331"
        ];
        $suburbs[] = [
        "3324","Lismore     ","3260"
        ];
        $suburbs[] = [
        "3480","Litchfield      ","3393"
        ];
        $suburbs[] = [
        "3211","Little River    ","3030"
        ];
        $suburbs[] = [
        "3551","Llanelly    ","3564"
        ];
        $suburbs[] = [
        "3945","Loch    ","3995"
        ];
        $suburbs[] = [
        "3851","Loch Sport  ","3850"
        ];
        $suburbs[] = [
        "3563","Lockington      ","3564"
        ];
        $suburbs[] = [
        "3665","Locksley    ","3666"
        ];
        $suburbs[] = [
        "3551","Lockwood South  ","3564"
        ];
        $suburbs[] = [
        "3475","Logan   ","3465"
        ];
        $suburbs[] = [
        "3691","Lone Pine   ","3690"
        ];
        $suburbs[] = [
        "3550","Long Gully  ","3550"
        ];
        $suburbs[] = [
        "3851","Longford    ","3850"
        ];
        $suburbs[] = [
        "3551","Longlea     ","3564"
        ];
        $suburbs[] = [
        "3816","Longwarry   ","3809"
        ];
        $suburbs[] = [
        "3665","Longwood    ","3666"
        ];
        $suburbs[] = [
        "3232","Lorne   ","3228"
        ];
        $suburbs[] = [
        "3221","Lovely Banks    ","3228"
        ];
        $suburbs[] = [
        "3093","Lower Plenty    ","3079"
        ];
        $suburbs[] = [
        "3381","Lubeck      ","3377"
        ];
        $suburbs[] = [
        "3875","Lucknow     ","3875"
        ];
        $suburbs[] = [
        "3691","Lucyvale    ","3690"
        ];
        $suburbs[] = [
        "3975","Lynbrook    ","3175"
        ];
        $suburbs[] = [
        "3975","Lyndhurst   ","3175"
        ];
        $suburbs[] = [
        "3461","Lyonville   ","3444"
        ];
        $suburbs[] = [
        "3156","Lysterfield     ","3152"
        ];
        $suburbs[] = [
        "3286","Macarthur   ","3284"
        ];
        $suburbs[] = [
        "3782","Macclesfield    ","3809"
        ];
        $suburbs[] = [
        "3440","Macedon     ","3444"
        ];
        $suburbs[] = [
        "3971","Macks Creek     ","3850"
        ];
        $suburbs[] = [
        "3085","Macleod     ","3072"
        ];
        $suburbs[] = [
        "3579","Macorna     ","3579"
        ];
        $suburbs[] = [
        "3860","Maffra      ","3850"
        ];
        $suburbs[] = [
        "3352","Magpie      ","3350"
        ];
        $suburbs[] = [
        "3551","Maiden Gully    ","3564"
        ];
        $suburbs[] = [
        "3012","Maidstone   ","3011"
        ];
        $suburbs[] = [
        "3275","Mailer Flat     ","3284"
        ];
        $suburbs[] = [
        "3928","Main Ridge  ","3939"
        ];
        $suburbs[] = [
        "3465","Majorca     ","3465"
        ];
        $suburbs[] = [
        "3463","Maldon      ","3450"
        ];
        $suburbs[] = [
        "3892","Mallacoota      ","3875"
        ];
        $suburbs[] = [
        "3446","Malmsbury   ","3444"
        ];
        $suburbs[] = [
        "3144","Malvern     ","3144"
        ];
        $suburbs[] = [
        "3145","Malvern East    ","3144"
        ];
        $suburbs[] = [
        "3546","Manangatang     ","3585"
        ];
        $suburbs[] = [
        "3551","Mandurang   ","3564"
        ];
        $suburbs[] = [
        "3663","Mangalore   ","3658"
        ];
        $suburbs[] = [
        "3218","Manifold Heights    ","3331"
        ];
        $suburbs[] = [
        "3222","Mannerim    ","3220"
        ];
        $suburbs[] = [
        "3722","Mansfield   ","3722"
        ];
        $suburbs[] = [
        "3724","Mansfield   ","3418"
        ];
        $suburbs[] = [
        "3222","Marcus Hill     ","3220"
        ];
        $suburbs[] = [
        "3032","Maribyrnong     ","3011"
        ];
        $suburbs[] = [
        "3888","Marlo   ","3875"
        ];
        $suburbs[] = [
        "3387","Marnoo      ","3380"
        ];
        $suburbs[] = [
        "3515","Marong      ","3450"
        ];
        $suburbs[] = [
        "3377","Maroona     ","3377"
        ];
        $suburbs[] = [
        "3216","Marshall    ","3220"
        ];
        $suburbs[] = [
        "3634","Marungi     ","3643"
        ];
        $suburbs[] = [
        "3465","Maryborough     ","3465"
        ];
        $suburbs[] = [
        "3812","Maryknoll   ","3809"
        ];
        $suburbs[] = [
        "3779","Marysville      ","3714"
        ];
        $suburbs[] = [
        "3723","Matlock     ","3722"
        ];
        $suburbs[] = [
        "3331","Maude   ","3331"
        ];
        $suburbs[] = [
        "3938","Mccrae      ","3939"
        ];
        $suburbs[] = [
        "3204","Mckinnon    ","3162"
        ];
        $suburbs[] = [
        "3799","Mcmahons Creek  ","3140"
        ];
        $suburbs[] = [
        "3048","Meadow Heights  ","3047"
        ];
        $suburbs[] = [
        "3956","Meeniyan    ","3953"
        ];
        $suburbs[] = [
        "3862","Meerlieu    ","3850"
        ];
        $suburbs[] = [
        "3000","Melbourne   ","3000"
        ];
        $suburbs[] = [
        "3001","Melbourne   ","3000"
        ];
        $suburbs[] = [
        "8001","Melbourne   ","#N/A"
        ];
        $suburbs[] = [
        "3045","Melbourne Airport   ","3047"
        ];
        $suburbs[] = [
        "3052","Melbourne University    ","3000"
        ];
        $suburbs[] = [
        "3337","Melton      ","3337"
        ];
        $suburbs[] = [
        "3338","Melton South    ","3337"
        ];
        $suburbs[] = [
        "3315","Melville Forest     ","3318"
        ];
        $suburbs[] = [
        "3194","Mentone     ","3192"
        ];
        $suburbs[] = [
        "3159","Menzies Creek   ","3809"
        ];
        $suburbs[] = [
        "3277","Mepunga     ","3280"
        ];
        $suburbs[] = [
        "3505","Merbein     ","3500"
        ];
        $suburbs[] = [
        "3333","Meredith    ","3331"
        ];
        $suburbs[] = [
        "3496","Meringur    ","3500"
        ];
        $suburbs[] = [
        "3310","Merino      ","3305"
        ];
        $suburbs[] = [
        "3058","Merlynston      ","3072"
        ];
        $suburbs[] = [
        "3754","Mernda      ","3752"
        ];
        $suburbs[] = [
        "3916","Merricks    ","3939"
        ];
        $suburbs[] = [
        "3926","Merricks Beach  ","3939"
        ];
        $suburbs[] = [
        "3926","Merricks North  ","3939"
        ];
        $suburbs[] = [
        "3618","Merrigum    ","3632"
        ];
        $suburbs[] = [
        "3723","Merrijig    ","3722"
        ];
        $suburbs[] = [
        "3715","Merton      ","3722"
        ];
        $suburbs[] = [
        "3448","Metcalfe    ","3450"
        ];
        $suburbs[] = [
        "3904","Metung      ","3875"
        ];
        $suburbs[] = [
        "3444","Mia Mia     ","3658"
        ];
        $suburbs[] = [
        "3064","Mickleham   ","3752"
        ];
        $suburbs[] = [
        "3840","Mid Valley  ","3840"
        ];
        $suburbs[] = [
        "3124","Middle Camberwell   ","3124"
        ];
        $suburbs[] = [
        "3206","Middle Park     ","3182"
        ];
        $suburbs[] = [
        "3678","Milawa      ","3643"
        ];
        $suburbs[] = [
        "3500","Mildura  Victoria   ","3500"
        ];
        $suburbs[] = [
        "3502","Mildura     ","3192"
        ];
        $suburbs[] = [
        "3501","Mildura Centre Plaza    ","3500"
        ];
        $suburbs[] = [
        "3082","Mill Park   ","3752"
        ];
        $suburbs[] = [
        "3352","Millbrook   ","3350"
        ];
        $suburbs[] = [
        "3799","Millgrove   ","3140"
        ];
        $suburbs[] = [
        "3572","Milloo      ","3564"
        ];
        $suburbs[] = [
        "3575","Mincha      ","3518"
        ];
        $suburbs[] = [
        "3567","Mincha West     ","3579"
        ];
        $suburbs[] = [
        "3352","Miners Rest     ","3350"
        ];
        $suburbs[] = [
        "3287","Minhamite   ","3284"
        ];
        $suburbs[] = [
        "3413","Minimay     ","3318"
        ];
        $suburbs[] = [
        "3351","Mininera    ","3377"
        ];
        $suburbs[] = [
        "3392","Minyip      ","3393"
        ];
        $suburbs[] = [
        "3415","Miram   ","3318"
        ];
        $suburbs[] = [
        "3871","Mirboo North    ","3840"
        ];
        $suburbs[] = [
        "3722","Mirimbah    ","3722"
        ];
        $suburbs[] = [
        "3132","Mitcham     ","3131"
        ];
        $suburbs[] = [
        "3352","Mitchell Park   ","3350"
        ];
        $suburbs[] = [
        "3355","Mitchell Park   ","3350"
        ];
        $suburbs[] = [
        "3573","Mitiamo     ","3564"
        ];
        $suburbs[] = [
        "3401","Mitre   ","3402"
        ];
        $suburbs[] = [
        "3701","Mitta Mitta     ","3700"
        ];
        $suburbs[] = [
        "3816","Modella     ","3809"
        ];
        $suburbs[] = [
        "3240","Modewarre   ","3228"
        ];
        $suburbs[] = [
        "3825","Moe     ","3840"
        ];
        $suburbs[] = [
        "3231","Moggs Creek     ","3228"
        ];
        $suburbs[] = [
        "3718","Molesworth      ","3714"
        ];
        $suburbs[] = [
        "3472","Moliagul    ","3465"
        ];
        $suburbs[] = [
        "3352","Mollongghip     ","3350"
        ];
        $suburbs[] = [
        "3673","Molyullah   ","3722"
        ];
        $suburbs[] = [
        "3800","Monash University   ","3840"
        ];
        $suburbs[] = [
        "3793","Monbulk     ","3140"
        ];
        $suburbs[] = [
        "3984","Monomeith   ","3995"
        ];
        $suburbs[] = [
        "3127","Mont Albert     ","3124"
        ];
        $suburbs[] = [
        "3129","Mont Albert North   ","3131"
        ];
        $suburbs[] = [
        "3094","Montmorency     ","3079"
        ];
        $suburbs[] = [
        "3765","Montrose    ","3140"
        ];
        $suburbs[] = [
        "3221","Moolap      ","3228"
        ];
        $suburbs[] = [
        "3478","Moonambel   ","3373"
        ];
        $suburbs[] = [
        "3825","Moondarra   ","3840"
        ];
        $suburbs[] = [
        "3039","Moonee Ponds    ","3039"
        ];
        $suburbs[] = [
        "3189","Moorabbin   ","3192"
        ];
        $suburbs[] = [
        "3194","Moorabbin Airport   ","3192"
        ];
        $suburbs[] = [
        "3189","Moorabbin East  ","3192"
        ];
        $suburbs[] = [
        "3221","Moorabool   ","3228"
        ];
        $suburbs[] = [
        "3933","Moorooduc   ","3939"
        ];
        $suburbs[] = [
        "3138","Mooroolbark     ","3140"
        ];
        $suburbs[] = [
        "3629","Mooroopna   ","3632"
        ];
        $suburbs[] = [
        "3195","Mordialloc      ","3192"
        ];
        $suburbs[] = [
        "3058","Moreland    ","3072"
        ];
        $suburbs[] = [
        "3240","Moriac      ","3228"
        ];
        $suburbs[] = [
        "3931","Mornington      ","3939"
        ];
        $suburbs[] = [
        "3334","Morrisons   ","3331"
        ];
        $suburbs[] = [
        "3272","Mortlake    ","3377"
        ];
        $suburbs[] = [
        "3840","Morwell     ","3840"
        ];
        $suburbs[] = [
        "3885","Mossiface   ","3875"
        ];
        $suburbs[] = [
        "3691","Mount Alfred    ","3690"
        ];
        $suburbs[] = [
        "3699","Mount Beauty    ","3741"
        ];
        $suburbs[] = [
        "3960","Mount Best  ","3953"
        ];
        $suburbs[] = [
        "3740","Mount Buffalo   ","3741"
        ];
        $suburbs[] = [
        "3723","Mount Buller    ","3722"
        ];
        $suburbs[] = [
        "3350","Mount Clear     ","3350"
        ];
        $suburbs[] = [
        "3024","Mount Cottrell  ","3030"
        ];
        $suburbs[] = [
        "3767","Mount Dandenong     ","3140"
        ];
        $suburbs[] = [
        "3216","Mount Duneed    ","3220"
        ];
        $suburbs[] = [
        "3352","Mount Egerton   ","3350"
        ];
        $suburbs[] = [
        "3930","Mount Eliza     ","3939"
        ];
        $suburbs[] = [
        "3796","Mount Evelyn    ","3140"
        ];
        $suburbs[] = [
        "3350","Mount Helen     ","3350"
        ];
        $suburbs[] = [
        "3741","Mount Hotham    ","3741"
        ];
        $suburbs[] = [
        "3377","Mount Lonarch   ","3377"
        ];
        $suburbs[] = [
        "3441","Mount Macedon   ","3444"
        ];
        $suburbs[] = [
        "3934","Mount Martha    ","3939"
        ];
        $suburbs[] = [
        "3240","Mount Moriac    ","3228"
        ];
        $suburbs[] = [
        "3350","Mount Pleasant  ","3350"
        ];
        $suburbs[] = [
        "3352","Mount Rowan     ","3350"
        ];
        $suburbs[] = [
        "3875","Mount Taylor    ","3875"
        ];
        $suburbs[] = [
        "3342","Mount Wallace   ","3331"
        ];
        $suburbs[] = [
        "3149","Mount Waverley  ","3150"
        ];
        $suburbs[] = [
        "3156","Mountain Gate   ","3152"
        ];
        $suburbs[] = [
        "3294","Moutajup    ","3377"
        ];
        $suburbs[] = [
        "3732","Moyhu   ","3677"
        ];
        $suburbs[] = [
        "3377","Moyston     ","3377"
        ];
        $suburbs[] = [
        "3451","Muckleford      ","3460"
        ];
        $suburbs[] = [
        "3462","Muckleford South    ","3450"
        ];
        $suburbs[] = [
        "3737","Mudgegonga      ","3747"
        ];
        $suburbs[] = [
        "3170","Mulgrave    ","3150"
        ];
        $suburbs[] = [
        "3610","Murchison   ","3666"
        ];
        $suburbs[] = [
        "3221","Murgheboluc     ","3228"
        ];
        $suburbs[] = [
        "3747","Murmungee   ","3747"
        ];
        $suburbs[] = [
        "3579","Murrabit    ","3579"
        ];
        $suburbs[] = [
        "3512","Murrayville     ","3500"
        ];
        $suburbs[] = [
        "3717","Murrindindi     ","3714"
        ];
        $suburbs[] = [
        "3243","Murroon     ","3250"
        ];
        $suburbs[] = [
        "3163","Murrumbeena     ","3162"
        ];
        $suburbs[] = [
        "3390","Murtoa      ","3402"
        ];
        $suburbs[] = [
        "3461","Musk    ","3444"
        ];
        $suburbs[] = [
        "3556","Myers Flat  ","3550"
        ];
        $suburbs[] = [
        "3341","Myrniong    ","3342"
        ];
        $suburbs[] = [
        "3851","Myrtlebank      ","3850"
        ];
        $suburbs[] = [
        "3736","Myrtleford      ","3672"
        ];
        $suburbs[] = [
        "3737","Myrtleford      ","3747"
        ];
        $suburbs[] = [
        "3518","Mysia   ","3527"
        ];
        $suburbs[] = [
        "3608","Nagambie    ","3666"
        ];
        $suburbs[] = [
        "3249","Nalangil    ","3260"
        ];
        $suburbs[] = [
        "3847","Nambrok     ","3850"
        ];
        $suburbs[] = [
        "3533","Nandaly     ","3527"
        ];
        $suburbs[] = [
        "3494","Nangiloc    ","3500"
        ];
        $suburbs[] = [
        "3561","Nanneella   ","3564"
        ];
        $suburbs[] = [
        "3352","Napoleons   ","3350"
        ];
        $suburbs[] = [
        "3812","Nar Nar Goon    ","3809"
        ];
        $suburbs[] = [
        "3778","Narbethong      ","3714"
        ];
        $suburbs[] = [
        "3315","Nareen      ","3318"
        ];
        $suburbs[] = [
        "3705","Nariel Valley   ","3700"
        ];
        $suburbs[] = [
        "3277","Naringal    ","3280"
        ];
        $suburbs[] = [
        "3285","Narrawong   ","3305"
        ];
        $suburbs[] = [
        "3805","Narre Warren    ","3805"
        ];
        $suburbs[] = [
        "3804","Narre Warren East   ","3805"
        ];
        $suburbs[] = [
        "3804","Narre Warren North  ","3805"
        ];
        $suburbs[] = [
        "3638","Nathalia    ","3643"
        ];
        $suburbs[] = [
        "3409","Natimuk     ","3402"
        ];
        $suburbs[] = [
        "3465","Natte Yallock   ","3465"
        ];
        $suburbs[] = [
        "3384","Navarre     ","3373"
        ];
        $suburbs[] = [
        "3352","Navigators      ","3350"
        ];
        $suburbs[] = [
        "3831","Neerim      ","3820"
        ];
        $suburbs[] = [
        "3821","Neerim Junction     ","3820"
        ];
        $suburbs[] = [
        "3821","Neerim North    ","3820"
        ];
        $suburbs[] = [
        "3831","Neerim South    ","3820"
        ];
        $suburbs[] = [
        "3292","Nelson      ","3305"
        ];
        $suburbs[] = [
        "3953","Nerrena     ","3820"
        ];
        $suburbs[] = [
        "3351","Nerrin Nerrin   ","3377"
        ];
        $suburbs[] = [
        "3350","Nerrina     ","3350"
        ];
        $suburbs[] = [
        "3413","Neuarpurr   ","3318"
        ];
        $suburbs[] = [
        "3438","New Gisborne    ","3444"
        ];
        $suburbs[] = [
        "3825","Newborough      ","3840"
        ];
        $suburbs[] = [
        "3551","Newbridge   ","3564"
        ];
        $suburbs[] = [
        "3458","Newbury     ","3444"
        ];
        $suburbs[] = [
        "3219","Newcomb     ","3220"
        ];
        $suburbs[] = [
        "3442","Newham      ","3444"
        ];
        $suburbs[] = [
        "3925","Newhaven    ","3995"
        ];
        $suburbs[] = [
        "3875","Newlands Arm    ","3875"
        ];
        $suburbs[] = [
        "3364","Newlyn      ","3465"
        ];
        $suburbs[] = [
        "3886","Newmerella      ","3875"
        ];
        $suburbs[] = [
        "3015","Newport     ","3018"
        ];
        $suburbs[] = [
        "3859","Newry   ","3850"
        ];
        $suburbs[] = [
        "3462","Newstead    ","3450"
        ];
        $suburbs[] = [
        "3220","Newtown     ","3220"
        ];
        $suburbs[] = [
        "3418","Nhill   ","3418"
        ];
        $suburbs[] = [
        "3501","Nichols Point   ","3500"
        ];
        $suburbs[] = [
        "3882","Nicholson   ","3875"
        ];
        $suburbs[] = [
        "3042","Niddrie     ","3039"
        ];
        $suburbs[] = [
        "3821","Nilma   ","3820"
        ];
        $suburbs[] = [
        "3268","Nirranda    ","3260"
        ];
        $suburbs[] = [
        "3174","Noble Park  ","3175"
        ];
        $suburbs[] = [
        "3174","Noble Park North    ","3175"
        ];
        $suburbs[] = [
        "3833","Noojee      ","3820"
        ];
        $suburbs[] = [
        "3265","Noorat      ","3260"
        ];
        $suburbs[] = [
        "3890","Noorinbee   ","3875"
        ];
        $suburbs[] = [
        "3401","Noradjuha   ","3402"
        ];
        $suburbs[] = [
        "3214","Norlane     ","3220"
        ];
        $suburbs[] = [
        "3682","Norong      ","3747"
        ];
        $suburbs[] = [
        "3550","North Bendigo   ","3550"
        ];
        $suburbs[] = [
        "3215","North Geelong   ","3220"
        ];
        $suburbs[] = [
        "3051","North Melbourne     ","3000"
        ];
        $suburbs[] = [
        "3187","North Road  ","3191"
        ];
        $suburbs[] = [
        "3214","North Shore     ","3220"
        ];
        $suburbs[] = [
        "3113","North Warrandyte    ","3108"
        ];
        $suburbs[] = [
        "3070","Northcote   ","3072"
        ];
        $suburbs[] = [
        "3072","Northland Centre    ","3072"
        ];
        $suburbs[] = [
        "3168","Notting Hill    ","3150"
        ];
        $suburbs[] = [
        "3887","Nowa Nowa   ","3875"
        ];
        $suburbs[] = [
        "3268","Nullawarre      ","3260"
        ];
        $suburbs[] = [
        "3529","Nullawil    ","3527"
        ];
        $suburbs[] = [
        "3636","Numurkah    ","3643"
        ];
        $suburbs[] = [
        "3131","Nunawading      ","3108"
        ];
        $suburbs[] = [
        "3110","Nunawading Bc   ","3108"
        ];
        $suburbs[] = [
        "3099","Nutfield    ","3088"
        ];
        $suburbs[] = [
        "3594","Nyah    ","3585"
        ];
        $suburbs[] = [
        "3595","Nyah West   ","3585"
        ];
        $suburbs[] = [
        "3987","Nyora   ","3809"
        ];
        $suburbs[] = [
        "3046","Oak Park    ","3058"
        ];
        $suburbs[] = [
        "3063","Oaklands Junction   ","3047"
        ];
        $suburbs[] = [
        "3166","Oakleigh    ","3150"
        ];
        $suburbs[] = [
        "3166","Oakleigh East   ","3150"
        ];
        $suburbs[] = [
        "3167","Oakleigh South  ","3150"
        ];
        $suburbs[] = [
        "3226","Ocean Grove     ","3220"
        ];
        $suburbs[] = [
        "3809","Officer     ","3809"
        ];
        $suburbs[] = [
        "3788","Olinda      ","3140"
        ];
        $suburbs[] = [
        "3898","Omeo    ","3741"
        ];
        $suburbs[] = [
        "3249","Ondit   ","3260"
        ];
        $suburbs[] = [
        "3888","Orbost      ","3875"
        ];
        $suburbs[] = [
        "3204","Ormond      ","3162"
        ];
        $suburbs[] = [
        "3951","Outtrim     ","3995"
        ];
        $suburbs[] = [
        "3490","Ouyen   ","3500"
        ];
        $suburbs[] = [
        "3738","Ovens   ","3741"
        ];
        $suburbs[] = [
        "3678","Oxley   ","3643"
        ];
        $suburbs[] = [
        "3413","Ozenkadnook     ","3318"
        ];
        $suburbs[] = [
        "3810","Pakenham    ","3809"
        ];
        $suburbs[] = [
        "3810","Pakenham Upper  ","3809"
        ];
        $suburbs[] = [
        "3265","Panmure     ","3260"
        ];
        $suburbs[] = [
        "3759","Panton Hill     ","3088"
        ];
        $suburbs[] = [
        "3851","Paradise Beach  ","3850"
        ];
        $suburbs[] = [
        "3114","Park Orchards   ","3108"
        ];
        $suburbs[] = [
        "3195","Parkdale    ","3192"
        ];
        $suburbs[] = [
        "3052","Parkville   ","3000"
        ];
        $suburbs[] = [
        "3340","Parwan      ","3337"
        ];
        $suburbs[] = [
        "3044","Pascoe Vale     ","3058"
        ];
        $suburbs[] = [
        "3044","Pascoe Vale South   ","3058"
        ];
        $suburbs[] = [
        "3491","Patchewollock   ","3500"
        ];
        $suburbs[] = [
        "3564","Patho   ","3564"
        ];
        $suburbs[] = [
        "3197","Patterson Lakes     ","3192"
        ];
        $suburbs[] = [
        "3880","Paynesville     ","3875"
        ];
        $suburbs[] = [
        "3912","Pearcedale      ","3805"
        ];
        $suburbs[] = [
        "3289","Penshurst   ","3300"
        ];
        $suburbs[] = [
        "3413","Peronne     ","3318"
        ];
        $suburbs[] = [
        "3270","Peterborough    ","3260"
        ];
        $suburbs[] = [
        "3757","Pheasant Creek  ","3752"
        ];
        $suburbs[] = [
        "3597","Piangil     ","3585"
        ];
        $suburbs[] = [
        "3572","Piavella    ","3564"
        ];
        $suburbs[] = [
        "3639","Picola      ","3643"
        ];
        $suburbs[] = [
        "3631","Pine Lodge  ","3666"
        ];
        $suburbs[] = [
        "3200","Pines Forest    ","3199"
        ];
        $suburbs[] = [
        "3249","Pirron Yallock  ","3260"
        ];
        $suburbs[] = [
        "3090","Plenty      ","3088"
        ];
        $suburbs[] = [
        "3030","Point Cook  ","3030"
        ];
        $suburbs[] = [
        "3260","Pomborneit      ","3260"
        ];
        $suburbs[] = [
        "3381","Pomonal     ","3377"
        ];
        $suburbs[] = [
        "3312","Poolaijelo      ","3318"
        ];
        $suburbs[] = [
        "3352","Pootilla    ","3350"
        ];
        $suburbs[] = [
        "3988","Poowong     ","3820"
        ];
        $suburbs[] = [
        "3740","Porepunkah      ","3741"
        ];
        $suburbs[] = [
        "3971","Port Albert     ","3850"
        ];
        $suburbs[] = [
        "3269","Port Campbell   ","3260"
        ];
        $suburbs[] = [
        "3284","Port Fairy  ","3284"
        ];
        $suburbs[] = [
        "3964","Port Franklin   ","3953"
        ];
        $suburbs[] = [
        "3207","Port Melbourne  ","3000"
        ];
        $suburbs[] = [
        "3965","Port Welshpool  ","3953"
        ];
        $suburbs[] = [
        "3223","Portarlington   ","3220"
        ];
        $suburbs[] = [
        "3305","Portland    ","3305"
        ];
        $suburbs[] = [
        "3944","Portsea     ","3939"
        ];
        $suburbs[] = [
        "3797","Powelltown      ","3140"
        ];
        $suburbs[] = [
        "3181","Prahran     ","3144"
        ];
        $suburbs[] = [
        "3572","Prairie     ","3564"
        ];
        $suburbs[] = [
        "3685","Prentice North  ","3747"
        ];
        $suburbs[] = [
        "3072","Preston     ","3072"
        ];
        $suburbs[] = [
        "3072","Preston South   ","3072"
        ];
        $suburbs[] = [
        "3054","Princes Hill    ","3121"
        ];
        $suburbs[] = [
        "3269","Princetown      ","3260"
        ];
        $suburbs[] = [
        "3662","Puckapunyal Milpo   ","3658"
        ];
        $suburbs[] = [
        "3271","Pura Pura   ","3377"
        ];
        $suburbs[] = [
        "3278","Purnim      ","3284"
        ];
        $suburbs[] = [
        "3521","Pyalong     ","3658"
        ];
        $suburbs[] = [
        "3575","Pyramid Hill    ","3518"
        ];
        $suburbs[] = [
        "3540","Quambatook      ","3579"
        ];
        $suburbs[] = [
        "3401","Quantong    ","3402"
        ];
        $suburbs[] = [
        "3550","Quarry Hill     ","3550"
        ];
        $suburbs[] = [
        "3225","Queenscliff     ","#N/A"
        ];
        $suburbs[] = [
        "3424","Rainbow     ","3418"
        ];
        $suburbs[] = [
        "3132","Rangeview   ","3131"
        ];
        $suburbs[] = [
        "3465","Rathscar    ","3465"
        ];
        $suburbs[] = [
        "3453","Ravenswood      ","3450"
        ];
        $suburbs[] = [
        "3825","Rawson      ","3840"
        ];
        $suburbs[] = [
        "3880","Raymond Island  ","3875"
        ];
        $suburbs[] = [
        "3570","Raywood     ","3550"
        ];
        $suburbs[] = [
        "3695","Red Bluff   ","3747"
        ];
        $suburbs[] = [
        "3496","Red Cliffs  ","3500"
        ];
        $suburbs[] = [
        "3937","Red Hill    ","3939"
        ];
        $suburbs[] = [
        "3937","Red Hill South  ","3939"
        ];
        $suburbs[] = [
        "3350","Redan   ","3350"
        ];
        $suburbs[] = [
        "3478","Redbank     ","3373"
        ];
        $suburbs[] = [
        "3444","Redesdale   ","3658"
        ];
        $suburbs[] = [
        "3658","Reedy Creek     ","3658"
        ];
        $suburbs[] = [
        "3072","Regent West     ","3072"
        ];
        $suburbs[] = [
        "3095","Research    ","3079"
        ];
        $suburbs[] = [
        "3073","Reservoir   ","3072"
        ];
        $suburbs[] = [
        "3923","Rhyll   ","3995"
        ];
        $suburbs[] = [
        "3121","Richmond    ","3121"
        ];
        $suburbs[] = [
        "3431","Riddells Creek  ","3444"
        ];
        $suburbs[] = [
        "3134","Ringwood    ","3108"
        ];
        $suburbs[] = [
        "3135","Ringwood East   ","3134"
        ];
        $suburbs[] = [
        "3134","Ringwood North  ","3108"
        ];
        $suburbs[] = [
        "3818","Ripplebrook     ","3820"
        ];
        $suburbs[] = [
        "3185","Ripponlea   ","3162"
        ];
        $suburbs[] = [
        "3019","Robinson    ","3011"
        ];
        $suburbs[] = [
        "3549","Robinvale   ","3585"
        ];
        $suburbs[] = [
        "3561","Rochester   ","3564"
        ];
        $suburbs[] = [
        "3442","Rochford    ","3444"
        ];
        $suburbs[] = [
        "3335","Rockbank    ","3337"
        ];
        $suburbs[] = [
        "3401","Rocklands   ","3402"
        ];
        $suburbs[] = [
        "3364","Rocklyn     ","3465"
        ];
        $suburbs[] = [
        "3821","Rokeby      ","3820"
        ];
        $suburbs[] = [
        "3330","Rokewood    ","3331"
        ];
        $suburbs[] = [
        "3351","Rokewood Junction   ","3377"
        ];
        $suburbs[] = [
        "3434","Romsey      ","3444"
        ];
        $suburbs[] = [
        "3084","Rosanna     ","3079"
        ];
        $suburbs[] = [
        "3285","Rosebrook   ","3305"
        ];
        $suburbs[] = [
        "3939","Rosebud     ","3939"
        ];
        $suburbs[] = [
        "3940","Rosebud West    ","3939"
        ];
        $suburbs[] = [
        "3847","Rosedale    ","3850"
        ];
        $suburbs[] = [
        "3351","Ross Creek  ","3377"
        ];
        $suburbs[] = [
        "3340","Rowsley     ","3337"
        ];
        $suburbs[] = [
        "3178","Rowville    ","3152"
        ];
        $suburbs[] = [
        "3064","Roxburgh Park   ","3752"
        ];
        $suburbs[] = [
        "3050","Royal Melbourne Hospital    ","3030"
        ];
        $suburbs[] = [
        "3712","Rubicon     ","3714"
        ];
        $suburbs[] = [
        "3666","Ruffy   ","3666"
        ];
        $suburbs[] = [
        "3388","Rupanyup    ","3393"
        ];
        $suburbs[] = [
        "3612","Rushworth   ","3564"
        ];
        $suburbs[] = [
        "3331","Russells Bridge     ","3331"
        ];
        $suburbs[] = [
        "3685","Rutherglen      ","3747"
        ];
        $suburbs[] = [
        "3941","Rye     ","3939"
        ];
        $suburbs[] = [
        "3936","Safety Beach    ","3939"
        ];
        $suburbs[] = [
        "3088","Saint Helena    ","3079"
        ];
        $suburbs[] = [
        "3850","Sale    ","3850"
        ];
        $suburbs[] = [
        "3853","Sale    ","3840"
        ];
        $suburbs[] = [
        "3517","Salisbury West  ","3518"
        ];
        $suburbs[] = [
        "3925","San Remo    ","3995"
        ];
        $suburbs[] = [
        "3312","Sandford    ","3318"
        ];
        $suburbs[] = [
        "3550","Sandhurst East  ","3550"
        ];
        $suburbs[] = [
        "3171","Sandown Village     ","3175"
        ];
        $suburbs[] = [
        "3191","Sandringham     ","3191"
        ];
        $suburbs[] = [
        "3695","Sandy Creek     ","3747"
        ];
        $suburbs[] = [
        "3959","Sandy Point     ","3953"
        ];
        $suburbs[] = [
        "3875","Sarsfield   ","3875"
        ];
        $suburbs[] = [
        "3787","Sassafras   ","3152"
        ];
        $suburbs[] = [
        "3787","Sassafras Gully     ","3152"
        ];
        $suburbs[] = [
        "3351","Scarsdale   ","3377"
        ];
        $suburbs[] = [
        "3179","Scoresby    ","3152"
        ];
        $suburbs[] = [
        "3176","Scoresby Bc     ","3152"
        ];
        $suburbs[] = [
        "3352","Scotsburn   ","3350"
        ];
        $suburbs[] = [
        "3267","Scotts Creek    ","3260"
        ];
        $suburbs[] = [
        "3533","Sea Lake    ","3527"
        ];
        $suburbs[] = [
        "3028","Seabrook    ","3018"
        ];
        $suburbs[] = [
        "3198","Seaford     ","3199"
        ];
        $suburbs[] = [
        "3018","Seaholme    ","3018"
        ];
        $suburbs[] = [
        "3851","Seaspray    ","3850"
        ];
        $suburbs[] = [
        "3858","Seaton      ","3850"
        ];
        $suburbs[] = [
        "3556","Sebastian   ","3550"
        ];
        $suburbs[] = [
        "3356","Sebastopol      ","3350"
        ];
        $suburbs[] = [
        "3011","Seddon      ","3011"
        ];
        $suburbs[] = [
        "3011","Seddon West     ","3011"
        ];
        $suburbs[] = [
        "3159","Selby   ","3809"
        ];
        $suburbs[] = [
        "3517","Serpentine      ","3518"
        ];
        $suburbs[] = [
        "3420","Serviceton      ","3318"
        ];
        $suburbs[] = [
        "3139","Seville     ","3140"
        ];
        $suburbs[] = [
        "3660","Seymour     ","3658"
        ];
        $suburbs[] = [
        "3661","Seymour     ","3658"
        ];
        $suburbs[] = [
        "3331","She Oaks    ","3331"
        ];
        $suburbs[] = [
        "3392","Sheep Hills     ","3393"
        ];
        $suburbs[] = [
        "3463","Shelbourne      ","3450"
        ];
        $suburbs[] = [
        "3329","Shelford    ","3331"
        ];
        $suburbs[] = [
        "3701","Shelley     ","3700"
        ];
        $suburbs[] = [
        "3630","Shepparton      ","3632"
        ];
        $suburbs[] = [
        "3632","Shepparton      ","3350"
        ];
        $suburbs[] = [
        "3631","Shepparton East     ","3666"
        ];
        $suburbs[] = [
        "3789","Sherbrooke      ","3140"
        ];
        $suburbs[] = [
        "3916","Shoreham    ","3939"
        ];
        $suburbs[] = [
        "3795","Silvan      ","3140"
        ];
        $suburbs[] = [
        "3564","Simmie      ","3564"
        ];
        $suburbs[] = [
        "3266","Simpson     ","3260"
        ];
        $suburbs[] = [
        "3465","Simson      ","3465"
        ];
        $suburbs[] = [
        "3361","Skipton     ","3377"
        ];
        $suburbs[] = [
        "3977","Skye    ","3199"
        ];
        $suburbs[] = [
        "3364","Smeaton     ","3465"
        ];
        $suburbs[] = [
        "3760","Smiths Gully    ","3088"
        ];
        $suburbs[] = [
        "3351","Smythes Creek   ","3377"
        ];
        $suburbs[] = [
        "3351","Smythesdale     ","3377"
        ];
        $suburbs[] = [
        "3351","Snake Valley    ","3377"
        ];
        $suburbs[] = [
        "3927","Somers      ","3939"
        ];
        $suburbs[] = [
        "3062","Somerton    ","3047"
        ];
        $suburbs[] = [
        "3912","Somerville      ","3805"
        ];
        $suburbs[] = [
        "3943","Sorrento    ","3939"
        ];
        $suburbs[] = [
        "3995","South Dudley    ","3995"
        ];
        $suburbs[] = [
        "3015","South Kingsville    ","3018"
        ];
        $suburbs[] = [
        "3205","South Melbourne     ","3182"
        ];
        $suburbs[] = [
        "3205","South Melbourne Dc  ","3182"
        ];
        $suburbs[] = [
        "3752","South Morang    ","3752"
        ];
        $suburbs[] = [
        "3141","South Yarra     ","3144"
        ];
        $suburbs[] = [
        "3006","Southbank   ","3000"
        ];
        $suburbs[] = [
        "3283","Southern Cross  ","3280"
        ];
        $suburbs[] = [
        "3192","Southland Centre    ","3191"
        ];
        $suburbs[] = [
        "3350","Sovereign Hill  ","3350"
        ];
        $suburbs[] = [
        "3488","Speed   ","3393"
        ];
        $suburbs[] = [
        "3015","Spotswood   ","3018"
        ];
        $suburbs[] = [
        "3550","Spring Gully    ","3550"
        ];
        $suburbs[] = [
        "3352","Springbank      ","3350"
        ];
        $suburbs[] = [
        "3682","Springhurst     ","3747"
        ];
        $suburbs[] = [
        "3171","Springvale      ","3175"
        ];
        $suburbs[] = [
        "3172","Springvale South    ","3175"
        ];
        $suburbs[] = [
        "3021","St Albans   ","3020"
        ];
        $suburbs[] = [
        "3219","St Albans Park  ","3220"
        ];
        $suburbs[] = [
        "3761","St Andrews  ","3088"
        ];
        $suburbs[] = [
        "3941","St Andrews Beach    ","3939"
        ];
        $suburbs[] = [
        "3478","St Arnaud   ","3373"
        ];
        $suburbs[] = [
        "3285","St Helens   ","3305"
        ];
        $suburbs[] = [
        "3727","St James    ","3643"
        ];
        $suburbs[] = [
        "3182","St Kilda    ","3182"
        ];
        $suburbs[] = [
        "3183","St Kilda East   ","3162"
        ];
        $suburbs[] = [
        "8004","St Kilda Road   ","3632"
        ];
        $suburbs[] = [
        "8008","St Kilda Road   ","3564"
        ];
        $suburbs[] = [
        "3182","St Kilda South  ","3182"
        ];
        $suburbs[] = [
        "3182","St Kilda West   ","3182"
        ];
        $suburbs[] = [
        "3223","St Leonards     ","3220"
        ];
        $suburbs[] = [
        "3691","Staghorn Flat   ","3690"
        ];
        $suburbs[] = [
        "3623","Stanhope    ","3564"
        ];
        $suburbs[] = [
        "3747","Stanley     ","3747"
        ];
        $suburbs[] = [
        "3221","Staughton Vale  ","3228"
        ];
        $suburbs[] = [
        "3379","Stavely     ","3377"
        ];
        $suburbs[] = [
        "3380","Stawell     ","3380"
        ];
        $suburbs[] = [
        "3775","Steels Creek    ","3088"
        ];
        $suburbs[] = [
        "3331","Steiglitz   ","3331"
        ];
        $suburbs[] = [
        "3221","Stonehaven      ","3228"
        ];
        $suburbs[] = [
        "3371","Stony Creek     ","3465"
        ];
        $suburbs[] = [
        "3957","Stony Creek     ","3953"
        ];
        $suburbs[] = [
        "3260","Stonyford   ","3260"
        ];
        $suburbs[] = [
        "3862","Stratford   ","3850"
        ];
        $suburbs[] = [
        "3658","Strath Creek    ","3658"
        ];
        $suburbs[] = [
        "3622","Strathallan     ","3564"
        ];
        $suburbs[] = [
        "3666","Strathbogie     ","3666"
        ];
        $suburbs[] = [
        "3550","Strathdale      ","3550"
        ];
        $suburbs[] = [
        "3312","Strathdownie    ","3318"
        ];
        $suburbs[] = [
        "3099","Strathewen      ","3088"
        ];
        $suburbs[] = [
        "3551","Strathfieldsaye     ","3564"
        ];
        $suburbs[] = [
        "3301","Strathkellar    ","3305"
        ];
        $suburbs[] = [
        "3641","Strathmerton    ","3643"
        ];
        $suburbs[] = [
        "3041","Strathmore      ","3039"
        ];
        $suburbs[] = [
        "3041","Strathmore Heights  ","3039"
        ];
        $suburbs[] = [
        "3351","Streatham   ","3377"
        ];
        $suburbs[] = [
        "3478","Stuart Mill     ","3373"
        ];
        $suburbs[] = [
        "3152","Studfield   ","3152"
        ];
        $suburbs[] = [
        "3429","Sunbury     ","3047"
        ];
        $suburbs[] = [
        "3496","Sunnycliffs     ","3500"
        ];
        $suburbs[] = [
        "3020","Sunshine    ","3020"
        ];
        $suburbs[] = [
        "3127","Surrey Hills    ","3124"
        ];
        $suburbs[] = [
        "3331","Sutherlands Creek   ","3331"
        ];
        $suburbs[] = [
        "3448","Sutton Grange   ","3450"
        ];
        $suburbs[] = [
        "3585","Swan Hill   ","3579"
        ];
        $suburbs[] = [
        "3249","Swan Marsh  ","3260"
        ];
        $suburbs[] = [
        "3903","Swan Reach  ","3875"
        ];
        $suburbs[] = [
        "3673","Swanpool    ","3722"
        ];
        $suburbs[] = [
        "3896","Swifts Creek    ","3875"
        ];
        $suburbs[] = [
        "3037","Sydenham    ","3337"
        ];
        $suburbs[] = [
        "3149","Syndal      ","3150"
        ];
        $suburbs[] = [
        "3607","Tabilk      ","3666"
        ];
        $suburbs[] = [
        "3714","Taggerty    ","3714"
        ];
        $suburbs[] = [
        "3371","Talbot      ","3465"
        ];
        $suburbs[] = [
        "3691","Talgarno    ","3690"
        ];
        $suburbs[] = [
        "3700","Tallangatta     ","3700"
        ];
        $suburbs[] = [
        "3659","Tallarook   ","3658"
        ];
        $suburbs[] = [
        "3634","Tallygaroopna   ","3643"
        ];
        $suburbs[] = [
        "3893","Tambo Crossing  ","3875"
        ];
        $suburbs[] = [
        "3885","Tambo Upper     ","3875"
        ];
        $suburbs[] = [
        "3669","Tamleugh    ","3666"
        ];
        $suburbs[] = [
        "3631","Tamleugh West   ","3666"
        ];
        $suburbs[] = [
        "3571","Tandarra    ","3518"
        ];
        $suburbs[] = [
        "3691","Tangambalanga   ","3690"
        ];
        $suburbs[] = [
        "3825","Tanjil South    ","3840"
        ];
        $suburbs[] = [
        "3921","Tankerton   ","3228"
        ];
        $suburbs[] = [
        "3447","Taradale    ","3460"
        ];
        $suburbs[] = [
        "3551","Tarnagulla      ","3564"
        ];
        $suburbs[] = [
        "3029","Tarneit     ","3030"
        ];
        $suburbs[] = [
        "3422","Tarranyurk      ","3418"
        ];
        $suburbs[] = [
        "3971","Tarraville      ","3850"
        ];
        $suburbs[] = [
        "3301","Tarrington      ","3305"
        ];
        $suburbs[] = [
        "3956","Tarwin      ","3953"
        ];
        $suburbs[] = [
        "3673","Tatong      ","3722"
        ];
        $suburbs[] = [
        "3616","Tatura      ","3632"
        ];
        $suburbs[] = [
        "3378","Tatyoon     ","3377"
        ];
        $suburbs[] = [
        "3697","Tawonga     ","3741"
        ];
        $suburbs[] = [
        "3698","Tawonga South   ","3741"
        ];
        $suburbs[] = [
        "3038","Taylors Lakes   ","3020"
        ];
        $suburbs[] = [
        "3160","Tecoma      ","3140"
        ];
        $suburbs[] = [
        "3328","Teesdale    ","3331"
        ];
        $suburbs[] = [
        "3401","Telangatuk East     ","3402"
        ];
        $suburbs[] = [
        "3730","Telford     ","3643"
        ];
        $suburbs[] = [
        "3106","Templestowe     ","3108"
        ];
        $suburbs[] = [
        "3107","Templestowe Lower   ","3108"
        ];
        $suburbs[] = [
        "3489","Tempy   ","3500"
        ];
        $suburbs[] = [
        "3984","Tenby Point     ","3995"
        ];
        $suburbs[] = [
        "3572","Tennyson    ","3564"
        ];
        $suburbs[] = [
        "3264","Terang      ","3260"
        ];
        $suburbs[] = [
        "3154","The Basin   ","3152"
        ];
        $suburbs[] = [
        "3984","The Gurdies     ","3995"
        ];
        $suburbs[] = [
        "3792","The Patch   ","3140"
        ];
        $suburbs[] = [
        "3265","The Sisters     ","3260"
        ];
        $suburbs[] = [
        "3074","Thomastown      ","3752"
        ];
        $suburbs[] = [
        "3726","Thoona      ","3672"
        ];
        $suburbs[] = [
        "3071","Thornbury   ","3072"
        ];
        $suburbs[] = [
        "3712","Thornton    ","3714"
        ];
        $suburbs[] = [
        "3835","Thorpdale   ","3820"
        ];
        $suburbs[] = [
        "3824","Thorpdale South     ","3820"
        ];
        $suburbs[] = [
        "3707","Thowgla Valley  ","3700"
        ];
        $suburbs[] = [
        "3797","Three Bridges   ","3140"
        ];
        $suburbs[] = [
        "3960","Tidal River     ","3953"
        ];
        $suburbs[] = [
        "3268","Timboon     ","3260"
        ];
        $suburbs[] = [
        "3859","Tinamba     ","3850"
        ];
        $suburbs[] = [
        "3708","Tintaldra   ","3700"
        ];
        $suburbs[] = [
        "3621","Tongala     ","3564"
        ];
        $suburbs[] = [
        "3815","Tonimbuk    ","3809"
        ];
        $suburbs[] = [
        "3522","Tooborac    ","3658"
        ];
        $suburbs[] = [
        "3614","Toolamba    ","3632"
        ];
        $suburbs[] = [
        "3777","Toolangi    ","3714"
        ];
        $suburbs[] = [
        "3337","Toolern Vale    ","3337"
        ];
        $suburbs[] = [
        "3551","Toolleen    ","3564"
        ];
        $suburbs[] = [
        "3401","Toolondo    ","3402"
        ];
        $suburbs[] = [
        "3285","Toolong     ","3305"
        ];
        $suburbs[] = [
        "3856","Toongabbie      ","3840"
        ];
        $suburbs[] = [
        "3962","Toora   ","3953"
        ];
        $suburbs[] = [
        "3980","Tooradin    ","3805"
        ];
        $suburbs[] = [
        "3142","Toorak      ","3144"
        ];
        $suburbs[] = [
        "3941","Tootgarook      ","3939"
        ];
        $suburbs[] = [
        "3228","Torquay     ","3228"
        ];
        $suburbs[] = [
        "3562","Torrumbarry     ","3564"
        ];
        $suburbs[] = [
        "3012","Tottenham   ","3011"
        ];
        $suburbs[] = [
        "3283","Tower Hill  ","3280"
        ];
        $suburbs[] = [
        "3707","Towong      ","3700"
        ];
        $suburbs[] = [
        "3824","Trafalgar   ","3820"
        ];
        $suburbs[] = [
        "3844","Traralgon   ","3840"
        ];
        $suburbs[] = [
        "3032","Travancore      ","3011"
        ];
        $suburbs[] = [
        "3373","Trawalla    ","3377"
        ];
        $suburbs[] = [
        "3660","Trawool     ","3658"
        ];
        $suburbs[] = [
        "3458","Trentham    ","3444"
        ];
        $suburbs[] = [
        "3583","Tresco      ","3585"
        ];
        $suburbs[] = [
        "3029","Truganina   ","3030"
        ];
        $suburbs[] = [
        "3888","Tubbut      ","3875"
        ];
        $suburbs[] = [
        "3915","Tuerong     ","3939"
        ];
        $suburbs[] = [
        "3043","Tullamarine     ","3058"
        ];
        $suburbs[] = [
        "3728","Tungamah    ","3643"
        ];
        $suburbs[] = [
        "3109","Tunstall Square Po  ","3108"
        ];
        $suburbs[] = [
        "3913","Tyabb   ","3939"
        ];
        $suburbs[] = [
        "3844","Tyers   ","3840"
        ];
        $suburbs[] = [
        "3444","Tylden      ","3658"
        ];
        $suburbs[] = [
        "3813","Tynong      ","3809"
        ];
        $suburbs[] = [
        "3285","Tyrendarra      ","3305"
        ];
        $suburbs[] = [
        "3550","Tysons Reef     ","3550"
        ];
        $suburbs[] = [
        "3364","Ullina      ","3465"
        ];
        $suburbs[] = [
        "3544","Ultima      ","3527"
        ];
        $suburbs[] = [
        "3629","Undera      ","3632"
        ];
        $suburbs[] = [
        "3509","Underbool   ","3500"
        ];
        $suburbs[] = [
        "3010","University Of Melbourne ","3011"
        ];
        $suburbs[] = [
        "3156","Upper Ferntree Gully    ","3152"
        ];
        $suburbs[] = [
        "3756","Upper Plenty    ","3444"
        ];
        $suburbs[] = [
        "3158","Upwey   ","3140"
        ];
        $suburbs[] = [
        "3860","Valencia Creek  ","3850"
        ];
        $suburbs[] = [
        "3407","Vasey   ","3300"
        ];
        $suburbs[] = [
        "3956","Venus Bay   ","3953"
        ];
        $suburbs[] = [
        "3133","Vermont     ","3134"
        ];
        $suburbs[] = [
        "3133","Vermont South   ","3134"
        ];
        $suburbs[] = [
        "3814","Vervale     ","3809"
        ];
        $suburbs[] = [
        "3294","Victoria Valley     ","3377"
        ];
        $suburbs[] = [
        "3084","Viewbank    ","3079"
        ];
        $suburbs[] = [
        "3591","Vinifera    ","3585"
        ];
        $suburbs[] = [
        "3669","Violet Town     ","3666"
        ];
        $suburbs[] = [
        "3885","W Tree  ","3875"
        ];
        $suburbs[] = [
        "3637","Waaia   ","3643"
        ];
        $suburbs[] = [
        "3687","Wahgunyah   ","3747"
        ];
        $suburbs[] = [
        "3608","Wahring     ","3666"
        ];
        $suburbs[] = [
        "3887","Wairewa     ","3875"
        ];
        $suburbs[] = [
        "3544","Waitchie    ","3527"
        ];
        $suburbs[] = [
        "3825","Walhalla    ","3840"
        ];
        $suburbs[] = [
        "3956","Walkerville     ","3953"
        ];
        $suburbs[] = [
        "3956","Walkerville South   ","3953"
        ];
        $suburbs[] = [
        "3352","Wallace     ","3350"
        ];
        $suburbs[] = [
        "3756","Wallan      ","3444"
        ];
        $suburbs[] = [
        "3221","Wallington      ","3228"
        ];
        $suburbs[] = [
        "3401","Wallup      ","3402"
        ];
        $suburbs[] = [
        "3875","Walpa   ","3875"
        ];
        $suburbs[] = [
        "3507","Walpeup     ","3500"
        ];
        $suburbs[] = [
        "3709","Walwa   ","3700"
        ];
        $suburbs[] = [
        "3612","Wanalta     ","3564"
        ];
        $suburbs[] = [
        "3216","Wandana Heights     ","3220"
        ];
        $suburbs[] = [
        "3744","Wandiligong     ","3741"
        ];
        $suburbs[] = [
        "3139","Wandin North    ","3140"
        ];
        $suburbs[] = [
        "3312","Wando Vale  ","3318"
        ];
        $suburbs[] = [
        "3758","Wandong     ","3658"
        ];
        $suburbs[] = [
        "3676","Wangaratta      ","3722"
        ];
        $suburbs[] = [
        "3677","Wangaratta      ","3677"
        ];
        $suburbs[] = [
        "3279","Wangoom     ","3284"
        ];
        $suburbs[] = [
        "3152","Wantirna    ","3152"
        ];
        $suburbs[] = [
        "3152","Wantirna South  ","3152"
        ];
        $suburbs[] = [
        "3959","Waratah Bay     ","3953"
        ];
        $suburbs[] = [
        "3799","Warburton   ","3140"
        ];
        $suburbs[] = [
        "3465","Wareek      ","3465"
        ];
        $suburbs[] = [
        "3243","Warncoort   ","3250"
        ];
        $suburbs[] = [
        "3980","Warneet     ","3805"
        ];
        $suburbs[] = [
        "3393","Warracknabeal   ","3418"
        ];
        $suburbs[] = [
        "3820","Warragul    ","3820"
        ];
        $suburbs[] = [
        "3377","Warrak      ","3377"
        ];
        $suburbs[] = [
        "3113","Warrandyte      ","3108"
        ];
        $suburbs[] = [
        "3134","Warrandyte South    ","3108"
        ];
        $suburbs[] = [
        "3134","Warranwood      ","3108"
        ];
        $suburbs[] = [
        "3670","Warrenbayne     ","3672"
        ];
        $suburbs[] = [
        "3352","Warrenheip      ","3350"
        ];
        $suburbs[] = [
        "3249","Warrion     ","3260"
        ];
        $suburbs[] = [
        "3280","Warrnambool     ","3280"
        ];
        $suburbs[] = [
        "3482","Watchem     ","3393"
        ];
        $suburbs[] = [
        "3485","Watchupga   ","3393"
        ];
        $suburbs[] = [
        "3195","Waterways   ","3192"
        ];
        $suburbs[] = [
        "3087","Watsonia    ","3079"
        ];
        $suburbs[] = [
        "3097","Watsons Creek   ","3088"
        ];
        $suburbs[] = [
        "3096","Wattle Glen     ","3088"
        ];
        $suburbs[] = [
        "3128","Wattle Park     ","3131"
        ];
        $suburbs[] = [
        "3352","Waubra      ","3350"
        ];
        $suburbs[] = [
        "3216","Waurn Ponds     ","3220"
        ];
        $suburbs[] = [
        "3352","Weatherboard    ","3350"
        ];
        $suburbs[] = [
        "3518","Wedderburn      ","3527"
        ];
        $suburbs[] = [
        "3251","Weering     ","3260"
        ];
        $suburbs[] = [
        "3966","Welshpool   ","3953"
        ];
        $suburbs[] = [
        "3355","Wendouree   ","3350"
        ];
        $suburbs[] = [
        "3355","Wendouree Village   ","3350"
        ];
        $suburbs[] = [
        "3352","Werneth     ","3350"
        ];
        $suburbs[] = [
        "3030","Werribee    ","3030"
        ];
        $suburbs[] = [
        "3496","Werrimull   ","3500"
        ];
        $suburbs[] = [
        "3799","Wesburn     ","3140"
        ];
        $suburbs[] = [
        "3012","West Footscray  ","3011"
        ];
        $suburbs[] = [
        "3003","West Melbourne  ","3000"
        ];
        $suburbs[] = [
        "3049","Westmeadows     ","3047"
        ];
        $suburbs[] = [
        "3351","Westmere    ","3377"
        ];
        $suburbs[] = [
        "3150","Wheelers Hill   ","3150"
        ];
        $suburbs[] = [
        "3550","White Hills     ","3550"
        ];
        $suburbs[] = [
        "3733","Whitfield   ","3677"
        ];
        $suburbs[] = [
        "3733","Whitlands   ","3677"
        ];
        $suburbs[] = [
        "3219","Whittington     ","3220"
        ];
        $suburbs[] = [
        "3757","Whittlesea      ","3752"
        ];
        $suburbs[] = [
        "3735","Whorouly    ","3677"
        ];
        $suburbs[] = [
        "3379","Wickliffe   ","3377"
        ];
        $suburbs[] = [
        "3728","Wilby   ","3643"
        ];
        $suburbs[] = [
        "3379","Willaura    ","3377"
        ];
        $suburbs[] = [
        "3016","Williamstown    ","3018"
        ];
        $suburbs[] = [
        "3825","Willow Grove    ","3840"
        ];
        $suburbs[] = [
        "3847","Willung     ","3850"
        ];
        $suburbs[] = [
        "3844","Willung South   ","3840"
        ];
        $suburbs[] = [
        "3241","Winchelsea      ","3228"
        ];
        $suburbs[] = [
        "3352","Windermere      ","3350"
        ];
        $suburbs[] = [
        "3181","Windsor     ","3144"
        ];
        $suburbs[] = [
        "3304","Winnap      ","3305"
        ];
        $suburbs[] = [
        "3281","Winslow     ","3280"
        ];
        $suburbs[] = [
        "3673","Winton      ","3722"
        ];
        $suburbs[] = [
        "3885","Wiseleigh   ","3875"
        ];
        $suburbs[] = [
        "3189","Wishart     ","3192"
        ];
        $suburbs[] = [
        "3689","Wodonga     ","3072"
        ];
        $suburbs[] = [
        "3690","Wodonga     ","3690"
        ];
        $suburbs[] = [
        "3690","Wodonga Plaza   ","3690"
        ];
        $suburbs[] = [
        "3750","Wollert     ","3752"
        ];
        $suburbs[] = [
        "3401","Wombelano   ","3402"
        ];
        $suburbs[] = [
        "3971","Won Wron    ","3850"
        ];
        $suburbs[] = [
        "3115","Wonga Park  ","3108"
        ];
        $suburbs[] = [
        "3221","Wongarra    ","3228"
        ];
        $suburbs[] = [
        "3995","Wonthaggi   ","3995"
        ];
        $suburbs[] = [
        "3596","Wood Wood   ","3585"
        ];
        $suburbs[] = [
        "3442","Woodend     ","3444"
        ];
        $suburbs[] = [
        "3715","Woodfield   ","3722"
        ];
        $suburbs[] = [
        "3281","Woodford    ","3280"
        ];
        $suburbs[] = [
        "3945","Woodleigh   ","3995"
        ];
        $suburbs[] = [
        "3723","Woods Point     ","3722"
        ];
        $suburbs[] = [
        "3874","Woodside    ","3850"
        ];
        $suburbs[] = [
        "3751","Woodstock   ","3752"
        ];
        $suburbs[] = [
        "3463","Woodstock West  ","3450"
        ];
        $suburbs[] = [
        "3249","Wool Wool   ","3260"
        ];
        $suburbs[] = [
        "3995","Woolamai    ","3995"
        ];
        $suburbs[] = [
        "3276","Woolsthorpe     ","3284"
        ];
        $suburbs[] = [
        "3485","Woomelang   ","3393"
        ];
        $suburbs[] = [
        "3747","Wooragee    ","3747"
        ];
        $suburbs[] = [
        "3139","Woori Yallock   ","3140"
        ];
        $suburbs[] = [
        "3589","Woorinen    ","3585"
        ];
        $suburbs[] = [
        "3588","Woorinen South  ","3585"
        ];
        $suburbs[] = [
        "3272","Woorndoo    ","3377"
        ];
        $suburbs[] = [
        "3005","World Trade Centre  ","3000"
        ];
        $suburbs[] = [
        "8005","World Trade Centre  ","3658"
        ];
        $suburbs[] = [
        "3885","Wulgulmerang    ","3875"
        ];
        $suburbs[] = [
        "3635","Wunghnu     ","3643"
        ];
        $suburbs[] = [
        "3241","Wurdiboluc      ","3228"
        ];
        $suburbs[] = [
        "3850","Wurruk      ","3850"
        ];
        $suburbs[] = [
        "3875","Wy Yung     ","3875"
        ];
        $suburbs[] = [
        "3527","Wycheproof      ","3579"
        ];
        $suburbs[] = [
        "3525","Wychitella      ","3527"
        ];
        $suburbs[] = [
        "3221","Wye River   ","3228"
        ];
        $suburbs[] = [
        "3024","Wyndham Vale    ","3030"
        ];
        $suburbs[] = [
        "3620","Wyuna   ","3564"
        ];
        $suburbs[] = [
        "3424","Yaapeet     ","3418"
        ];
        $suburbs[] = [
        "3646","Yabba North     ","3666"
        ];
        $suburbs[] = [
        "3749","Yackandandah    ","3747"
        ];
        $suburbs[] = [
        "3085","Yallambie   ","3072"
        ];
        $suburbs[] = [
        "3825","Yallourn North  ","3840"
        ];
        $suburbs[] = [
        "3285","Yambuk      ","3305"
        ];
        $suburbs[] = [
        "3621","Yambuna     ","3564"
        ];
        $suburbs[] = [
        "3755","Yan Yean    ","3752"
        ];
        $suburbs[] = [
        "3418","Yanac   ","3418"
        ];
        $suburbs[] = [
        "3960","Yanakie     ","3953"
        ];
        $suburbs[] = [
        "3461","Yandoit     ","3444"
        ];
        $suburbs[] = [
        "3981","Yannathan   ","3809"
        ];
        $suburbs[] = [
        "3719","Yarck   ","3714"
        ];
        $suburbs[] = [
        "3775","Yarra Glen  ","3088"
        ];
        $suburbs[] = [
        "3797","Yarra Junction  ","3140"
        ];
        $suburbs[] = [
        "3823","Yarragon    ","3820"
        ];
        $suburbs[] = [
        "3971","Yarram      ","3850"
        ];
        $suburbs[] = [
        "3091","Yarrambat   ","3088"
        ];
        $suburbs[] = [
        "3013","Yarraville      ","3011"
        ];
        $suburbs[] = [
        "3013","Yarraville West     ","3011"
        ];
        $suburbs[] = [
        "3575","Yarrawalla      ","3518"
        ];
        $suburbs[] = [
        "3730","Yarrawonga      ","3643"
        ];
        $suburbs[] = [
        "3644","Yarroweyah      ","3643"
        ];
        $suburbs[] = [
        "3677","Yarrunga    ","3677"
        ];
        $suburbs[] = [
        "3717","Yea     ","3714"
        ];
        $suburbs[] = [
        "3139","Yellingbo   ","3140"
        ];
        $suburbs[] = [
        "3352","Yendon      ","3350"
        ];
        $suburbs[] = [
        "3249","Yeo     ","3260"
        ];
        $suburbs[] = [
        "3249","Yeodene     ","3260"
        ];
        $suburbs[] = [
        "3869","Yinnar      ","3840"
        ];
        $suburbs[] = [
        "3646","Youanmite   ","3666"
        ];
        $suburbs[] = [
        "3727","Yundool     ","3643"
        ];
        $suburbs[] = [
        "3063","Yuroke      ","3047"
        ];

        return $suburbs;
    }
}
