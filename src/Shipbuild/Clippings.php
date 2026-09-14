<?php

namespace App\Shipbuild;

final class Clippings
{
    /**
     * News clippings in Hull 02.2. The room landing lists them; each slug is its own page.
     *
     * @return list<array{
     *     hullNo: string,
     *     tag: string,
     *     title: string,
     *     summary: string,
     *     slug: string,
     *     linkLabel: string,
     *     byline: string,
     *     presented: string,
     *     blocks: list<array<string, mixed>>
     * }>
     */
    public static function all(): array
    {
        return [
            self::torpedoChasers(),
            self::lakefaringHistory(),
            self::savitarComesHome(),
        ];
    }

    /**
     * @return array{
     *     hullNo: string,
     *     tag: string,
     *     title: string,
     *     summary: string,
     *     slug: string,
     *     linkLabel: string,
     *     byline: string,
     *     presented: string,
     *     blocks: list<array<string, mixed>>
     * }|null
     */
    public static function findBySlug(string $slug): ?array
    {
        foreach (self::all() as $clipping) {
            if ($clipping['slug'] === $slug) {
                return $clipping;
            }
        }

        return null;
    }

    /** Live /shipbuild/inthenews/{slug} aliases. */
    public static function slugFromLegacy(string $legacySlug): ?string
    {
        $map = [
            '1917-torpedo-chasers' => 'torpedo-chasers',
            'lakefaring-history' => 'lakefaring-history',
            'savitar-comes-home' => 'savitar-comes-home',
        ];

        return $map[$legacySlug] ?? null;
    }

    /**
     * @return array{
     *     hullNo: string,
     *     tag: string,
     *     title: string,
     *     summary: string,
     *     slug: string,
     *     linkLabel: string,
     *     byline: string,
     *     presented: string,
     *     blocks: list<array<string, mixed>>
     * }
     */
    private static function torpedoChasers(): array
    {
        $dir = '/media/archive/clippings';

        return [
            'hullNo' => '02.2.1',
            'tag' => '1917',
            'title' => 'Five Torpedo Chasers for Government',
            'summary' => 'De Foe Boat & Motor Co. loads five 40-foot Navy chasers onto flats for the Atlantic coast. Contract price $60,000.',
            'slug' => 'torpedo-chasers',
            'linkLabel' => 'Read the clipping',
            'byline' => 'Unknown newspaper.',
            'presented' => 'Clipping, 1917. Transcript from the scan.',
            'blocks' => [
                [
                    'type' => 'figure',
                    'src' => $dir . '/1917-defoe-news-clipping.jpg',
                    'caption' => 'Five Torpedo Chasers for Government. Clipping, 1917.',
                    'class' => 'narrow',
                ],
                [
                    'type' => 'p',
                    'text' => 'Five torpedo chasers, built for the government by the DeFoe Boat & Motor Co., of Bay City, were on cars and ready for shipment to “somewhere” on the Atlantic coast this morning. These craft represented $60,000 in cold cash.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Although the company received the contract from the navy department last October, it was not generally known that the plant was engaged on work for the government, few even in this city having any knowledge of the fact. The company went into competition with several other boat building concerns and walked away with the contract without any trouble. Under existing circumstances, however, it was not considered wise to make any announcement of the competitive achievement.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The torpedo chasers are constructed of the very best obtainable materials. They are 40 feet long, 10 feet beam, with four feet draught. The frames are of full length stock, no splicing being allowed. White oak was used and the planking is Port Orford cedar, brought here from Oregon. The navy department is taking the entire output of this material from the source because of its durability. All the fastenings are copper riveted. The castings are solid bronze of special government composition. The bow stem is cased in brass castings for the purpose of rigidity and durability. These craft are equipped with the Winton gasoline engines, built by the Winton Engine Co., of Cleveland, Ohio, with 85 horse power. The engines are of the heavy duty type and weigh in the neighborhood of three tons each. While the weight is excessive the government needed the boats also for towing purposes when exigencies might arise. They are constructed to stand any kind of weather and almost any kind of hard usage.',
                ],
                [
                    'type' => 'p',
                    'text' => 'This design of craft is wanted at torpedo proving grounds and practice stations where torpedoes are tested out and also for the benefit of gunners at naval training stations. A similar contract was secured at the same time by the Herschoff Co., of Newport, R. I.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The loading of the craft on cars in front of the Defoe Boat & Motor Co. yesterday afternoon attracted considerable attention, each requiring an entire flat on account of its size.',
                ],
                [
                    'type' => 'note',
                    'text' => 'Paper not identified on the clipping. “Herschoff” is as printed (Herreshoff).',
                ],
            ],
        ];
    }

    /**
     * @return array{
     *     hullNo: string,
     *     tag: string,
     *     title: string,
     *     summary: string,
     *     slug: string,
     *     linkLabel: string,
     *     byline: string,
     *     presented: string,
     *     blocks: list<array<string, mixed>>
     * }
     */
    private static function lakefaringHistory(): array
    {
        $dir = '/media/archive/clippings';

        return [
            'hullNo' => '02.2.2',
            'tag' => '1999',
            'title' => 'Our Lakefaring History',
            'summary' => 'Essexville lectures on river tugs, warships built in Bay City, and a bid to bring USS Charles F. Adams (DDG-2) home as a museum.',
            'slug' => 'lakefaring-history',
            'linkLabel' => 'Read the clipping',
            'byline' => 'Darlene B. Damp.',
            'presented' => 'The Saginaw News, January 16, 1999.',
            'blocks' => [
                [
                    'type' => 'figure',
                    'src' => $dir . '/lakefaring-history-uss-charles-f-adams.jpg',
                    'caption' => 'The guided missile destroyer USS Charles F. Adams at sea. For The Saginaw News.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Essexville — “The old salt just crusts off his shoulders,” teases U.S. Navy veteran Michael J. Kegley about his friend and fellow veteran Richard J. Janke.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The Bay City pals not only trade jokes — they’re also set to present one of four upcoming lectures designed to “float your boat,” according to Karen Savage of Essexville-Hampton Community Education.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The Wednesday-night series at Garber High School will offer historical insights while helping nonprofit groups — which provide the speakers — raise funds for their community projects.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Kegley and Janke will discuss “Warships Built in Bay City” on Wednesday, January 27, while Dom Comtois of the Saginaw River Marine Society opens the series with “Saginaw River Logging: Tugboats at Work.”',
                ],
                [
                    'type' => 'p',
                    'text' => 'Also featured are “Diving and Great Lakes Shipwrecks” with underwater diver and photographer Ric Mixter on February 3, and “Great Lakes Lighthouses: Keepers and Their Families” with Bonnie Reno of the Great Lakes Lighthouse Keepers Association on Wednesday, February 24.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Each lecture — followed by a question-and-answer session — runs from 7:00 to 8:30 p.m. in Room 24 at Garber High School. Register by the Monday prior to the talk. The Essexville-Hampton Community Education Office will split the $8 admission fee with the nonprofit group providing the lecture.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Next week, history buff Dom Comtois, 55, will discuss how Michigan lumber traveled from the woods to the sawmills — and the ships that carried it there.',
                ],
                [
                    'type' => 'quote',
                    'text' => '“I don’t own a boat, but I’ve researched the history of shipbuilding in Bay City, looking at old newspapers and articles,” said Comtois, a Dow Chemical Co. retiree. “I’ve indexed this information and more for the Bay City Library for 30 years. The Saginaw River was one of the largest shipbuilding areas in its heyday. More than 600 commercial vessels were built, from St. Charles to Sebewaing and Au Gres — and that’s not counting the 400 to 500 ships built by Defoe Shipbuilding Co. in Bay City and all the yacht companies, like the Eddy Co. in Saginaw. Lumbering is what brought them all here.”',
                ],
                [
                    'type' => 'p',
                    'text' => 'Comtois added that tugboats were once used to tow logs down the river, sounding a whistle to clear smaller boats out of the way when the logs were on the move. His group hopes to eventually open a maritime museum to preserve that heritage.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Meanwhile, Kegley, 59, and Janke, 62 — members of the Saginaw Valley Naval Ship Museum Committee — are “consumed” by their efforts to bring a former U.S. Navy guided-missile destroyer, the USS Charles F. Adams (DDG-2), to Bay City from a Pennsylvania shipyard.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Their committee has compiled a comprehensive list of all the vessels built by Defoe Shipbuilding Co. from its founding in 1911 until it closed in 1977.',
                ],
                [
                    'type' => 'quote',
                    'text' => '“We have pictures and we’ll talk about the ships — including a 1937 yacht that was originally called the Lenore, later renamed the Honey Fitz when it became President John F. Kennedy’s yacht,” said Kegley, who served as an aviation sailor during World War II and now works as a Mutual of Omaha representative. “We’ll also talk about our project,” added Janke, noting that the committee has raised $75,000 of the $2 million needed to bring the ship to Bay City and maintain it. “We’ve got all the engineering down, and the city has donated a slip at the old Davidson Dry Dock in Veterans Memorial Park.”',
                ],
                [
                    'type' => 'p',
                    'text' => 'If successful, the Adams would become the newest of 104 ship museums in North America, featuring a nearby building to house and display additional Great Lakes maritime artifacts.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Although it isn’t one of the seven destroyers constructed at Defoe, the ship still holds historical significance, Janke said.',
                ],
                [
                    'type' => 'quote',
                    'text' => '“This guided-missile destroyer was the first ever built in America,” explained Kegley, “and it would be the only one of its kind — and the newest ship museum on display.”',
                ],
                [
                    'type' => 'p',
                    'text' => 'Of the seven destroyers built at Defoe, Kegley noted, “Three are in Australia and still sailing, and four have been reconverted into power barges that now supply electricity to small cities. We wanted one of those seven, but we couldn’t get it.”',
                ],
                [
                    'type' => 'quote',
                    'text' => '“We’re putting out a plea to all Navy vets across the nation to just donate $1,” said Janke, owner of Valley Industrial Products in Bay City. He served on a World War II destroyer. “Our mission is education, education, education — then tourism. A lot of the freedoms we enjoy today are due to the efforts of vets, and youth today don’t know what price it came at. Freedom is not free.”',
                ],
                [
                    'type' => 'p',
                    'text' => 'Those wishing to make a tax-deductible donation toward the ship museum may send contributions to the Saginaw Valley Naval Ship Museum Committee.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Those interested in the Saginaw River Marine History Society are welcome to attend its monthly meetings. The group plans to host “Ships of Duluth, Minn.” this month, a Great Lakes author in February, and an artifact “show and tell” in March.',
                ],
                [
                    'type' => 'note',
                    'text' => 'The printed telephone number is omitted here, as on the live posting.',
                ],
            ],
        ];
    }

    /**
     * @return array{
     *     hullNo: string,
     *     tag: string,
     *     title: string,
     *     summary: string,
     *     slug: string,
     *     linkLabel: string,
     *     byline: string,
     *     presented: string,
     *     blocks: list<array<string, mixed>>
     * }
     */
    private static function savitarComesHome(): array
    {
        $dir = '/media/archive/clippings';

        return [
            'hullNo' => '02.2.3',
            'tag' => '2006',
            'title' => '‘Savitar’ Comes Home',
            'summary' => 'Phil Berg and Leila Hyams roll a 52-foot land yacht onto the Defoe yard in 1955, named for the 118-foot yacht the company built them in 1947.',
            'slug' => 'savitar-comes-home',
            'linkLabel' => 'Read the clipping',
            'byline' => 'Tim Younkman.',
            'presented' => 'The Bay City Times, Wednesday, March 1, 2006.',
            'blocks' => [
                [
                    'type' => 'p',
                    'text' => 'Stars of Hollywood rolled their “land yacht” into Bay City in 1955.',
                ],
                [
                    'type' => 'p',
                    'text' => 'It looked like a cross between a gigantic Greyhound bus and the Vista Cruiser railroad passenger car, complete with a streamlined observation dome.',
                ],
                [
                    'type' => 'p',
                    'text' => 'In tow was a Land Rover with a small motorboat strapped to its top.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Inside was a Hollywood mogul few people in Bay City would recognize and his well-known actress wife. They were more than familiar with some of the movie industry’s top names, including several Academy Award winners.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The unusual procession wheeled its way onto the grounds of the Defoe Shipbuilding Co. on Woodside Avenue, near the foot of Washington Avenue, in June 1955. It was a moment in time captured by The Times photographs.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The vehicle, a custom-made General Motors rig identified as a “land yacht,” had just traveled across the country from California to New York and was headed back when it stopped here, and the occupants welcomed old friend and shipbuilder Harry Defoe aboard.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The land yacht was named the “Savitar,” after a sun deity of Hindu mythology.',
                ],
                [
                    'type' => 'p',
                    'text' => 'It was a name familiar to Bay Cityans because it was the same name of a very fancy and expensive yacht constructed by the Defoe company in 1947. The style was used in the construction of six yachts at Defoe, one of which became a presidential yacht.',
                ],
                [
                    'type' => 'figure',
                    'src' => $dir . '/savitar-comes-home-leila-hyams.jpg',
                    'caption' => 'Leila Hyams, a star of the 1920s and ’30s. The Bay City Times, 2006.',
                    'class' => 'narrow',
                ],
                [
                    'type' => 'p',
                    'text' => 'Owners of both Savitars were Phil Berg and his wife Leila Hyams. They had visited Bay City in 1947 to take possession of their new ocean-going yacht — a luxury craft that cost $200,000, a very handsome price tag for the time.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Having enjoyed the luxurious 118-foot yacht with its ultra-modern conveniences and richly appointed cabin, Berg and his wife decided they’d like something equally as comfortable to get them around the nation’s highways. Berg, an amateur archaeologist, wanted to be able to reach his favorite spots at his own pace and in comfort.',
                ],
                [
                    'type' => 'p',
                    'text' => 'So, in 1955, he had General Motors’ Pontiac Division in California design his “land yacht,” using some of the interior design of the ocean yacht’s cabin.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The result was the 52-foot vehicle we would now call a motor home.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The vehicle sported a 4.5-ton air-conditioning unit with a 10-kilowatt generator and another 1,500-watt generator. A water-supply system held 200 gallons. Couches could be turned into extra beds, and a specially installed television set provided entertainment. The land Savitar had a stainless-steel galley, a master bedroom, and a freezer unit.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The rig even included “crew quarters” behind the driver’s seat, complete with toilet and shower.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Berg planned to take his land yacht with him on a trip to Iraq to dig among the ruins of ancient Mesopotamia.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The wealthy Berg was identified only as an actors’ business manager.',
                ],
                [
                    'type' => 'p',
                    'text' => 'His wife was more well-known than Berg. Leila Hyams, who was 51 when she visited Bay City for the second time, was known as a good character actress in a number of movies in the 1920s and 1930s. She was remembered as the “wise-cracking, kind-hearted circus performer” in Freaks (1932), according to her Wikipedia biography. She also played the heroine in the 1933 film Island of Lost Souls.',
                ],
                [
                    'type' => 'p',
                    'text' => 'In The Big Broadcast (1932), she appeared with Bing Crosby, George Burns, and Gracie Allen, the Internet biography noted.',
                ],
                [
                    'type' => 'p',
                    'text' => 'She retired from the screen in 1936 and devoted her time to her husband and his business.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Berg was a partner in the Phil Berg–Bert Allenberg Inc. firm of theatrical agents.',
                ],
                [
                    'type' => 'p',
                    'text' => 'He represented some of Hollywood’s top stars — many with Academy Award credits — including director Frank Capra, Clark Gable, Judy Garland, Joan Crawford, and Peter Lawford. He also represented playwright Clifford Odets and British author Richard Llewellyn.',
                ],
                [
                    'type' => 'p',
                    'text' => 'He represented Crawford early in her career, negotiating her first major contract with MGM in 1931, winning for her an astounding $3,000 per week — which rose to $5,000 per week by 1936. She went on to win the Oscar for Best Actress in 1946 for Mildred Pierce.',
                ],
                [
                    'type' => 'p',
                    'text' => 'In true Mommy Dearest form, Crawford paid Berg back by dumping him prior to a new contract in 1938.',
                ],
                [
                    'type' => 'p',
                    'text' => 'He went on to represent Capra, who won Oscars for Best Director in 1934 (It Happened One Night), 1936 (Mr. Deeds Goes to Town), and 1938 (You Can’t Take It With You). He was nominated again for Best Director for the 1946 classic It’s a Wonderful Life.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Gable won the Best Actor award for It Happened One Night and had been nominated for several of his memorable roles in later films.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Garland won a juvenile Oscar for her role in The Wizard of Oz, which even today is replayed for millions of wide-eyed kids.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Their second and final visit to Bay City might have gone unrecognized except that some of the Defoe Shipbuilding people wanted their boss to get recognition and tipped off the newspaper. The result was a feature story about the “land yacht,” with a photo of Defoe with Berg and Hyams lounging in the land-bound cabin.',
                ],
                [
                    'type' => 'figure',
                    'src' => $dir . '/savitar-comes-home-02.jpg',
                    'caption' => '‘Savitar’ Returns to Bay City as Luxury Land Yacht. The Bay City Times, 1955, with later montage.',
                ],
                [
                    'type' => 'note',
                    'text' => 'Originally published in The Bay City Times, March 1, 2006. Written by Tim Younkman.',
                ],
            ],
        ];
    }
}
