<?php

namespace App\Shipbuild;

final class ErnestRBreech
{
    public static function item(): Project
    {
        return new Project(
            hullNo: '02.5.3',
            tag: '1962',
            title: 'Naming Ceremonies S.S. Ernest R. Breech',
            summary: 'Ford Motor Company naming pamphlet. Detroit, 11 April 1962. The cover and the pamphlet pictures are posted. The small drawings that sat in the text pages were left out.',
            slug: 'ernest-r-breech-naming',
            linkLabel: 'Open the pamphlet',
            base: 'shipbuild/miscellaneous',
            lede: 'Ford Motor Company named a Great Lakes ship for Ernest R. Breech in Detroit on 11 April 1962. Henry Ford II spoke. Mrs. Ernest R. Breech sponsored the ship.',
        );
    }

    public static function byline(): string
    {
        return 'Ford Motor Company.';
    }

    public static function presented(): string
    {
        return 'Naming ceremony pamphlet. Detroit, Michigan, 11 April 1962.';
    }

    /**
     * @return array{src: string, caption: string}
     */
    public static function cover(): array
    {
        return [
            'src' => '/media/archive/miscellaneous/ernest-r-breech/ernest-r-breech-01-cover.jpg',
            'caption' => 'Cover. Naming Ceremonies S.S. Ernest R. Breech. Detroit, Michigan, 11 April 1962.',
        ];
    }

    /**
     * @return list<array{id: string, title: string}>
     */
    public static function sections(): array
    {
        return [
            ['id' => 'welcome', 'title' => 'Welcome...'],
            ['id' => 'the-sponsor', 'title' => 'The Sponsor'],
            ['id' => 'the-ship', 'title' => 'The Ship'],
            ['id' => 'the-man', 'title' => 'The Man'],
            ['id' => 'the-ford-fleet', 'title' => 'The Ford Fleet'],
            ['id' => 'ingredients-of-steel', 'title' => 'Ingredients of Steel'],
            ['id' => 'the-great-lakes', 'title' => 'The Great Lakes'],
            ['id' => 'iron-ore-to-automobile', 'title' => 'Iron Ore to Automobile'],
        ];
    }

    /**
     * @return list<array<string, mixed>>
     */
    public static function blocks(): array
    {
        return [
            self::heading('welcome', 'Welcome...'),
            self::paragraph('…Perhaps we at Ford Motor Company can never adequately show our esteem to Ernest R. Breech for the tremendous contribution he has made to the Company. At the time he stepped down as Chairman of the Board, we tried to convey some of that feeling. But even a year later, we would like to do more. By naming this ship for him, we hope to come closer to expressing the gratitude and respect we feel toward him.'),
            self::paragraph('A ship seems appropriate. All his life he has been associated with transportation, from the time he helped out with carriage-making in his father\'s blacksmith shop, through an illustrious career in both the aviation and the automobile industries. Through his companies\' products, he has been represented on the land and in the air. Today we are happy to add another dimension.'),
            self::paragraph('Some men have an unusual ability to inspire others and to make a mark that time cannot erase. Whether they captain ships or direct the affairs of business, they are, first of all, captains of men. They have an exceptional keenness of vision and sense of purpose that others are quick to recognize. Because they stride forward with an unfaltering step, they draw others to follow confidently. That\'s the kind of man Ernie Breech is.'),
            self::paragraph('I like to think of this ship, the S. S. Ernest R. Breech, riding the waves, weathering storms, carrying that distinguished name to many ports, doing the essential business of industry, and doing it exceedingly well. As it does that, then it is a fitting tribute to the man for whom it is named—especially fitting because it is dynamic and purposeful, even as he is.'),
            self::figure('henry-ford-ii', 'ernest-r-breech-02-henry-ford-2.jpg', 'Henry Ford II.', 'narrow'),
            self::heading('the-sponsor', 'The Sponsor'),
            self::figure('mrs-ernest-r-breech', 'ernest-r-breech-03-mrs-ernest-r-breech.jpg', 'Mrs. Ernest R. Breech.', 'narrow'),
            self::paragraph('It is particularly fitting that Mrs. Ernest R. Breech should sponsor the vessel being named in her husband\'s honor today. For, from the beginning, she has shared both the joys and the concerns of her husband\'s notable career.'),
            self::paragraph('Born Thelma Rowden near Lebanon, Mo., she met her future husband when they attended Lebanon High School where both competed in declamation. Mr. Breech won his school\'s declamation competition in 1913, and two years later Mrs. Breech won the state contest. In 1917, shortly after Mr. Breech took his first job with Fairbanks Morse & Company in Chicago, the former high school sweethearts were married.'),
            self::paragraph('Early in their marriage Mr. Breech considered a career in the law, but Mrs. Breech encouraged him to stay in the accounting field. She was to experience the first of many joys in his subsequent accomplishments when in 1921, he was awarded a gold medal for achieving the highest grade in the Illinois examination for certified public accountants.'),
            self::paragraph('Although she was much sought after for civic and social activities, Mrs. Breech has preferred to be known primarily as a good wife and mother, aiding and encouraging her husband and her sons in their careers.'),
            self::paragraph('Mr. and Mrs. Breech live in Bloomfield Hills, Mich. They have two sons, Ernest Robert Breech, Jr., and William H. Breech, and six grandchildren.'),
            self::figure('sponsor-ship', 'ernest-r-breech-04-the-ship.jpg', '', '', 'Drawing of the S.S. Ernest R. Breech.'),
            self::heading('the-ship', 'The Ship'),
            self::shipStatistics(),
            self::figure('the-ship-page', 'ernest-r-breech-05-the-ship.jpg', '', '', 'The Ship. Vital statistics.'),
            self::heading('the-man', 'The Man'),
            self::figure('the-man', 'ernest-r-breech-06-the-man.jpg', 'Ernest R. Breech.', 'narrow'),
            self::paragraph('A name long outstanding in air and ground transportation is today linked with water transportation as Ford Motor Company\'s new vessel is named the S. S. Ernest R. Breech.'),
            self::paragraph('Mr. Breech began his association with transportation as a boy in his father\'s Lebanon, Mo., blacksmith shop. He applied a self-earned education to his aptitude for mechanics and management and rode the transportation industry to the top.'),
            self::paragraph('Prior to joining Ford, he had been a vice president of General Motors Corporation and president and later chairman of the board of North American Aviation, Inc. He was president of Bendix Aviation Corporation before joining Ford as executive vice president in 1946.'),
            self::paragraph('Organizing and directing the new management "team" at Ford after World War II, Mr. Breech tackled and accomplished a familiar mission — to achieve progress through modernization and expansion, with emphasis on greater efficiency and lower costs.'),
            self::paragraph('Mr. Breech relinquished his operational responsibilities at Ford when he resigned as chairman of the board on July 13, 1960. He continued to serve on the board of directors, on the product planning committee, and as chairman of the company\'s finance committee until January 11, 1961, when he resigned from the latter two positions to devote more time to his personal affairs and other interests.'),
            self::heading('the-ford-fleet', 'The Ford Fleet'),
            self::paragraph('The S. S. Ernest R. Breech being named today becomes the fourth vessel in the current Ford Fleet. At one time, however, the Ford Fleet consisted of more than 40 ships.'),
            self::paragraph('After World War I, Henry Ford converted former U.S. Government ships into ocean-going vessels that sailed to Ford rubber plants in South America. Until World War II, Ford ships carried auto parts from the Rouge Plant to assembly plants in the East and returned with commercial cargo.'),
            self::paragraph('Of today\'s Ford Fleet, the S. S. William Clay Ford retains its position as the youngest and largest vessel . . . built in 1953 with a cargo capacity of 19,000 tons and a length of 647 feet. The M. S. Henry Ford II and the M. S. Benson Ford were the first diesel ore freighters on the Great Lakes when they were built in 1924. Each has a cargo capacity of 13,500 tons and a length of 612 feet.'),
            self::figure('the-ford-fleet-page', 'ernest-r-breech-07-the-fleet.jpg', '', '', 'The Ford fleet. Benson Ford, Henry Ford II, William Clay Ford, and Ernest R. Breech.'),
            self::heading('ingredients-of-steel', 'Ingredients of Steel'),
            self::paragraph('Ford\'s three Great Lakes vessels carried nearly 2.9 million tons of iron ore, limestone and coal during the 1961 shipping season. They made a total of 187 trips over a combined distance of 152,647 miles.'),
            self::paragraph('Cargoes of raw materials delivered to the Ford Rouge plant in Dearborn, including those carried by non-company vessels, reached 4.6 million tons at year-end. The total included 2.2 million tons of iron ore, 1.8 million tons of coal, and 579,354 tons of limestone.'),
            self::paragraph('The materials are used by the company\'s Steel Division in Rouge blast furnaces, coke ovens, open hearth furnaces and power house.'),
            self::figure('ingredients-of-steel-map', 'ernest-r-breech-08-map.jpg', '', '', 'Ingredients of Steel. Map of the Great Lakes routes.'),
            self::heading('the-great-lakes', 'The Great Lakes'),
            self::paragraph('Samuel de Champlain was one of the first white men to see the Great Lakes. In 1615 when he tasted the water, he gave it a name: "This is the Sweet Sea — Las Mer Douce." Many years after that incident, the lakes were called The Great Lakes. The lakes were created by prehistoric glaciers, which also were responsible for 40,000 other and much smaller lakes in this area.'),
            self::paragraph('Lake Superior is one of the largest inland lakes in the world. Lake Huron and Lake Michigan are almost equal in size. These three, together with Lake Erie and Lake Ontario, form a chain of lakes of tremendous expanse and grandeur.'),
            self::paragraph('Eight American states border on the Great Lakes. They are Minnesota, Wisconsin, Illinois, Indiana, Michigan, Ohio, Pennsylvania and New York. Of the hundred great cities of the United States, 18, including Detroit and Chicago, are located directly on the Great Lakes.'),
            self::figure('pictures', 'ernest-r-breech-09.jpg', '', '', 'The ship at the Rouge, steelmaking, and the assembly line.'),
            self::heading('iron-ore-to-automobile', 'Iron Ore to Automobile'),
            self::paragraph('Water transportation led Henry Ford to select the banks of the Rouge River in Dearborn, Mich., as the site of his manufacturing plant in 1917. He envisioned a wholly independent, self-contained manufacturing unit where every part needed for an automobile could be produced, machined, finished and assembled into a completed car ready for the road.'),
            self::paragraph('The plant was so revolutionary that some of Mr. Ford\'s friendliest critics were skeptical. His enemies said he was crazy.'),
            self::paragraph('Today the giant manufacturing plant is the largest concentration of closely knit, integrated factories owned by one company in America. The "Rouge" remains the only plant on the continent where raw iron ore is unloaded on the docks and, within a matter of days, is transformed into engines, frames, bodies and parts and, finally, completed automobiles.'),
            self::paragraph('This huge symbol of productive genius is in its fifth decade — an industrial center still unrivalled anywhere in the world as a tourist attraction.'),
            self::figure('back-cover', 'ernest-r-breech-10-back-cover.jpg', '', '', 'Back cover. Four ships of the Ford fleet.'),
        ];
    }

    /**
     * @return array{type: string, rows: list<array{0: string, 1: string}>}
     */
    private static function shipStatistics(): array
    {
        return [
            'type' => 'table',
            'rows' => [
                ['Builders', 'Defoe Ship Building Company, Bay City, Michigan'],
                ['Length O.A.', '639\' 6"'],
                ['Beam O.A.', '67\''],
                ['Moulded Hull Depth', '35\''],
                ['Speed Light', '16.5 mph'],
                ['Speed Loaded', '14.5 mph'],
                ['Capacity', '18,500 GT'],
                ['Max. Draft', '24\' 6"'],
                ['Hatches', '19'],
                ['Compartments', '4'],
                ['Power Plant', 'Oil Fired Steam Turbine, 4000 h.p.'],
                ['Passenger Accommodations', '8'],
                ['Officers', '10'],
                ['Crew', '25'],
                ['Built', '1952'],
                ['Former Name', 'SS. Charles L. Hutchinson'],
            ],
        ];
    }

    /**
     * @return array{type: string, id: string, text: string}
     */
    private static function heading(string $id, string $text): array
    {
        return [
            'type' => 'heading',
            'id' => $id,
            'text' => $text,
        ];
    }

    /**
     * @return array{type: string, text: string}
     */
    private static function paragraph(string $text): array
    {
        return [
            'type' => 'p',
            'text' => $text,
        ];
    }

    /**
     * @return array{type: string, id: string, src: string, caption: string, link: bool, class?: string, alt?: string}
     */
    private static function figure(string $id, string $file, string $caption, string $class = '', string $alt = ''): array
    {
        $figure = [
            'type' => 'figure',
            'id' => $id,
            'src' => '/media/archive/miscellaneous/ernest-r-breech/' . $file,
            'caption' => $caption,
            'link' => true,
        ];

        if ($class !== '') {
            $figure['class'] = $class;
        }

        if ($alt !== '') {
            $figure['alt'] = $alt;
        }

        return $figure;
    }

}
