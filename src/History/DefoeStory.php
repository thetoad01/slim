<?php

namespace App\History;

use App\Shipbuild\Project;

final class DefoeStory
{
    public static function article(): Project
    {
        return new Project(
            hullNo: '01.1',
            tag: 'History',
            title: 'The Defoe story',
            summary: 'How the brothers opened the yard, and how Bay City learned to send ships to salt water.',
            slug: 'the-defoe-story',
            linkLabel: 'Read the story',
            base: 'history',
            lede: 'The company’s own account of the yard: from the 1905 boat shop to wartime roll-over, postwar destroyers, and work on the river.',
        );
    }

    public static function byline(): string
    {
        return 'Defoe Shipbuilding Company.';
    }

    public static function presented(): string
    {
        return 'Company brochure, printed pages 1–16. Circa the mid-1960s.';
    }

    /**
     * @return array{caption: string, placeholder: string, src: string}
     */
    public static function cover(): array
    {
        return [
            'src' => '/media/history/the-defoe-story/henry-b-wilson-ddg-7.jpg',
            'caption' => 'Cover. USS Henry B. Wilson (DDG-7).',
            'placeholder' => 'Extract from the brochure cover.',
        ];
    }

    /**
     * Brochure contents. Page spans follow the printed table of contents.
     *
     * @return list<array{id: string, title: string, pages: string, span: string}>
     */
    public static function chapters(): array
    {
        return [
            self::chapter('introduction', 'Introduction', '1'),
            self::chapter('the-past', 'The Past', '2'),
            self::chapter('world-war-ii-shipbuilding', 'World War II Shipbuilding', '3–7'),
            self::chapter('post-war-military', 'Post War Military', '8–9'),
            self::chapter('commercial', 'Commercial', '10'),
            self::chapter('private-shipbuilding', 'Private Shipbuilding', '11'),
            self::chapter('steel-fabrication', 'Steel Fabrication', '12'),
            self::chapter('reconstruction-and-conversion', 'Reconstruction and Conversion', '13'),
            self::chapter('the-defoe-yards', 'The Defoe Yards', '14–15'),
            self::chapter('the-future', 'The Future', '16'),
        ];
    }

    /**
     * @return list<array{type: string, id?: string, text?: string, pages?: string, src?: string, caption?: string, placeholder?: string, items?: list<array{name?: string, title?: string, caption?: string, placeholder?: string}>}>
     */
    public static function blocks(): array
    {
        $blocks = [];

        foreach (self::chapters() as $chapter) {
            $blocks[] = [
                'type' => 'heading',
                'id' => $chapter['id'],
                'text' => $chapter['title'],
                'pages' => $chapter['pages'],
            ];

            foreach (self::copyFor($chapter['id']) as $block) {
                $blocks[] = $block;
            }

            foreach (self::figuresFor($chapter['id']) as $figure) {
                $blocks[] = $figure;
            }
        }

        $blocks[] = [
            'type' => 'figure',
            'src' => '/media/history/the-defoe-story/back-cover.jpg',
            'caption' => 'Back cover. Defoe Shipbuilding Company, Bay City, Michigan.',
            'placeholder' => 'Extract from the back cover.',
        ];

        return $blocks;
    }

    /**
     * @return array{id: string, title: string, pages: string, span: string}
     */
    private static function chapter(string $id, string $title, string $pages): array
    {
        return [
            'id' => $id,
            'title' => $title,
            'pages' => $pages,
            'span' => str_contains($pages, '–') ? 'Printed pp. ' . $pages . '.' : 'Printed p. ' . $pages . '.',
        ];
    }

    /**
     * Photographs from the brochure, not the full page scans.
     *
     * @return list<array{type: string, caption: string, placeholder: string}>
     */
    private static function figuresFor(string $chapterId): array
    {
        $figures = [];

        $out = [];

        foreach ($figures[$chapterId] ?? [] as [$caption, $placeholder]) {
            $out[] = [
                'type' => 'figure',
                'caption' => $caption,
                'placeholder' => $placeholder,
            ];
        }

        return $out;
    }

    /**
     * @return list<array{type: string, text?: string, src?: string, caption?: string, placeholder?: string, items?: list<string|array{name?: string, title?: string, caption?: string, placeholder?: string}>}>
     */
    private static function copyFor(string $chapterId): array
    {
        return match ($chapterId) {
            'introduction' => [
                [
                    'type' => 'p',
                    'text' => 'The single, most important ingredient which distinguishes ships constructed at the Defoe Shipbuilding Company is as tangible as sheet steel . . . yet you can’t find it on a set of working drawings. It is a method . . . a purpose . . . a way of doing things. It can be defined as craftsmanship . . . as extra attention to detail . . . as superior workmanship. But regardless of what you call it, the net result for the customer is a deck more finely crafted, quarters more completely finished . . . a total ship more masterfully executed.',
                ],
                [
                    'type' => 'p',
                    'text' => 'This is Defoe quality . . . a kind of quality which over the decades has become the overriding characteristic of every Defoe product. Quality that costs no more . . . and which is created as a result of the pride of workmanship offered to you by Defoe craftsmen. Defoe has been a one-owner firm since its inception—a family-owned shipyard in the great traditions of the past. Its people have served Defoe customers for as many as three consecutive generations, with skills handed down from father to son.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The purpose of this brochure is to acquaint you with Defoe — with its facilities, its people, its way of doing things. Please feel free to call upon us to answer, in person, any questions which you might have concerning the Defoe Shipbuilding Company.',
                ],
                [
                    'type' => 'signatories',
                    'items' => [
                        ['name' => 'Thomas J. Defoe', 'title' => 'President'],
                        ['name' => 'William M. Defoe', 'title' => 'Chairman of the Board'],
                    ],
                ],
            ],
            'the-past' => [
                [
                    'type' => 'p',
                    'text' => 'The Defoe Shipbuilding Company was formed in 1905 with the opening of a small boat shop in Bay City. Engaged primarily in the pioneering construction of knock-down boats, the company developed small pleasure and commercial craft which were shipped unassembled around the world.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The shop flourished. During World War I, owners H. J. and F. W. Defoe obtained the firm’s first military contract—a U.S. Army Transport Service order for eight 100-foot Steel Harbor Mineplanters.',
                ],
                [
                    'type' => 'p',
                    'text' => 'To facilitate the military contract, an additional site was acquired and a steel shipbuilding plant was constructed.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Following World War I, Defoe became a major builder of steel-hull, custom yachts, as well as many types of commercial ships.',
                ],
                [
                    'type' => 'p',
                    'text' => 'World War II saw the shipyard again swing into military shipbuilding—an activity in which Defoe is actively engaged today.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Since that first original order for eight minesweepers in 1918, Defoe has constructed hundreds of ships for military and commercial use, ranging from 650-foot Great Lakes ore carriers to guided missile destroyers for the United States and the Royal Australian Navies.',
                ],
            ],
            'world-war-ii-shipbuilding' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/carpellotti-apd-136.jpg',
                    'caption' => 'USS Carpellotti (APD-136). Printed p. 3.',
                    'placeholder' => 'Extract from the top of printed p. 3.',
                ],
                [
                    'type' => 'p',
                    'text' => 'With its unique design and engineering experience in the military field, Defoe in 1939 was awarded a U.S. Navy contract for the design and construction of the first U.S. 173-foot Subchaser. After building the first such subchasers to be constructed in this country, Defoe was named design agent for additional subchaser contractors.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The company then built for the Navy Department numerous 220-foot minesweepers, followed by contracts for 143-foot rescue tugs, 110-foot harbor tugs, 157-foot infantry landing craft, 307-foot destroyer escort vessels, 307-foot high-speed troop transports and 136-foot freight and ammunition carriers.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/roll-over.jpg',
                    'caption' => 'Roll-over method of construction.',
                    'placeholder' => 'Extract from the top of the roll-over spread.',
                ],
                [
                    'type' => 'p',
                    'text' => 'In order to fulfill the initial subchaser contract in the shortest possible time, an entirely new concept in ship construction was originated and perfected by Defoe.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Widely known as the “roll-over method of construction,” the technique was utilized in subsequent wartime operations at Defoe. It functioned like this: a cradle was built to the exact shape of the main deck of the vessel. On this cradle the deck was laid and frames and bulk-heads were erected bottom-side up. The complete bottom section of the vessel, including keel, floors, and from four to six strakes of shell plating, was dropped into place on top of the frames and bulkheads. The remaining shell plating was installed and welding was undertaken.',
                ],
                [
                    'type' => 'p',
                    'text' => 'By using this method it was possible for Defoe to eliminate virtually 90 per cent of all overhead welding. This fact alone created immense savings in man-hours because, of course, down-hand welding can be performed much faster with concomitant results of better workmanship.',
                ],
                [
                    'type' => 'p',
                    'text' => 'When the vessel was in the upside-down position, all machinery, which normally hangs or is attached to the underside of the deck, was installed.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The erection sequence for hull steel was arranged so that nearly all of the conventional ship scaffolding was eliminated.',
                ],
                [
                    'type' => 'p',
                    'text' => 'With the hull completed, two semi-circular steel “wheels” were clamped around it. The deck cradle was dropped into an out-of-the-way position. The hull, by now supported entirely on these two wheels, then rested on two heavy parallel steel tracks. Cables were thrown around the hull in opposite directions and a steam locomotive crane, by pulling on one cable and holding back on the other, rolled the vessel on the two wheels and tracks into an upright position. The whole line of process took no more than two-and-a-half minutes.',
                ],
                [
                    'type' => 'p',
                    'text' => 'With the vessel upright, additional machinery was installed and deckhouses placed in position.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The first destroyer escort attempted by Defoe was built on the conventional plan of an upright hull. However, the company determined that the highly-efficient method of the bottom-up hull could also be adapted to the larger ship. From that point, all destroyer escorts and high-speed transports were built bottom-up utilizing the “roll-over” technique.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/earl-v-johnson-de-702.jpg',
                    'caption' => 'Launch of USS Earl V. Johnson (DE-702). Full page.',
                    'placeholder' => 'Extract from the full-page launch photograph.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/lester-de-1022.jpg',
                    'caption' => 'USS Lester (DE-1022). Full page.',
                    'placeholder' => 'Extract from the full-page photograph.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/wartime-deliveries.jpg',
                    'caption' => 'Wartime deliveries.',
                    'placeholder' => 'Extract from the last WWII page.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Defoe Shipbuilding Company delivered over 160 vessels to the Navy Department during the World War II emergency.',
                ],
                [
                    'type' => 'p',
                    'text' => 'This figure includes:',
                ],
                [
                    'type' => 'list',
                    'items' => [
                        '58-173\' Submarine Chasers',
                        '4-220\' Minesweepers',
                        '4-143\' Rescue Tugs',
                        '3-110\' Harbor Tugs',
                        '47-157\' Infantry Landing Craft-LCI(L)',
                        '17-307\' Destroyer Escort Vessels',
                        '9-307\' High-Speed Troop Transports-APD’s',
                        '10-136\' Freight and Ammunition Carriers',
                    ],
                ],
            ],
            'post-war-military' => [
                [
                    'type' => 'p',
                    'text' => 'The end of the Second World War did not bring a halt to construction of ships for the U.S. Government.',
                ],
                [
                    'type' => 'p',
                    'text' => 'A contract to build two new destroyer escorts for the U.S. Navy was awarded to the company in 1954. These vessels were 315 feet long and powered by a 20,000 HP steam turbine. The contract was completed in the spring of 1957.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Under a research and development contract, Defoe also designed, engineered and fabricated the first fiber-glass reinforced plastic minesweeper MSB-23 for the Navy.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Capitalizing upon past performance and upon the caliber of its skilled metalworking, machinery and electronics specialists, in 1957 Defoe obtained a contract to build two guided missile destroyers for the U.S. Navy. A second contract to build an additional two guided missile destroyers was awarded to the company the following year. These destroyers are 440 feet long, 47-foot beam and have a full load displacement of 4500 tons.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The destroyers are equipped to launch Tartar surface-to-air missiles and carry the latest anti-submarine warfare armament.',
                ],
                [
                    'type' => 'p',
                    'text' => 'When the last of the four vessels was delivered and commissioned by the Navy, Defoe was awarded an additional contract to build three more guided missile destroyers. These three ships are scheduled for delivery to the Royal Australian Navy Fleet.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Three destroyer escorts of a new and larger class were contracted by the U.S. Navy in 1963. The ships are 415 feet in length, with a 49-foot beam, 35,000 HP steam turbine engine and a displacement of 3400 tons.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/ddg-8-12-13.jpg',
                    'caption' => 'Building the guided missile destroyers; USS Robison (DDG-12), USS Hoel (DDG-13), and USS Lynde McCormick (DDG-8) alongside. Full page.',
                    'placeholder' => 'Extract from the full-page photograph.',
                ],
            ],
            'commercial' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/commercial-great-lakes.jpg',
                    'caption' => 'Great Lakes ships launched from the Defoe yards.',
                    'placeholder' => 'Extract from the top of printed p. 10.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Commercial ship construction at Defoe has been a major activity since the end of the Second World War.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Iron ore freighters and super carriers of the 600-foot-and-up class have been both designed and constructed by Defoe.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Ore carriers of the 650-foot class and diesel harbor tugs are among the wide variety of other commercial ships designed and constructed. Typical of the Great Lakes ships launched from the Defoe yards are those shown on this page.',
                ],
            ],
            'private-shipbuilding' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/yacht-interior-and-typical-yacht.jpg',
                    'caption' => 'Custom yacht interior and a typical yacht.',
                    'placeholder' => 'Extract from printed p. 11.',
                ],
                [
                    'type' => 'p',
                    'text' => 'During the 1920-30 era, custom steel-hull yachts formed a major part of the Defoe business. Yachts up to the 170-foot class . . . many of which were designed for transoceanic voyages . . . were delivered to owners in all parts of the Western Hemisphere.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Following World War II, Defoe introduced a unique technique of combining custom interiors and deck arrangements with standardized hulls and machinery, thus permitting customers to enjoy considerable savings from some standardization without the disadvantage of fixed or standard interiors. Customers can vary interior accommodations extensively to suit their own personal tastes and needs.',
                ],
                [
                    'type' => 'p',
                    'text' => 'While the call for large pleasure craft has generally diminished throughout the industry, Defoe remains geared to design and produce major pleasure craft. A typical yacht is illustrated above.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The same craftsmanship which created the reputation enjoyed by Defoe yachts is utilized today at Defoe in the careful attention to detail which is found in every military and commercial ship which is launched at the Defoe shipyards.',
                ],
            ],
            'steel-fabrication' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/mackinac-bridge.jpg',
                    'caption' => 'Mackinac Bridge.',
                    'placeholder' => 'Extract from printed p. 12.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/mackinac-pipe-structures.jpg',
                    'caption' => 'Pipe structures for the Mackinac Bridge piers.',
                    'placeholder' => 'Extract from printed p. 12.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The steel fabrication facilities at Defoe function also in the field of general heavy-steel fabrication.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The fabricating plant constructed the base for the first steam catapult to be built for the U.S. Navy. Utilized today on aircraft carriers for aircraft launching, the pilot unit was successfully installed and tested at Patuxent, Maryland.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Another example of land-based heavy steel fabrication is the caisson anchorage contract which Defoe executed for the world-famous Mackinac Bridge. Here, pipe structures for the 26,000-foot bridge were sunk into the Straits of Mackinac and caissons were sunk between them to form the major bridge piers.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Steel fabrications for major industrial plants, schools, office buildings and banking structures in the Midwest have also been constructed by Defoe.',
                ],
            ],
            'reconstruction-and-conversion' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/ore-carrier-conversion.jpg',
                    'caption' => 'Ore carrier conversion at the yard.',
                    'placeholder' => 'Extract from printed p. 13.',
                ],
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/self-unloader-boom.jpg',
                    'caption' => 'Self-unloader boom.',
                    'placeholder' => 'Extract from printed p. 13.',
                ],
                [
                    'type' => 'p',
                    'text' => 'Today Defoe is actively engaged in both the reconstruction and conversion of Great Lakes and ocean-going freighters. Fabricating, repair and installation service is offered by Defoe. Reboilering, repowering and the modernization of hulls and ship quarters are also included in custom reconstruction activities.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The converting of ore carriers into self-unloaders is just one of the many types of conversion operations performed at the Defoe yards.',
                ],
            ],
            'the-defoe-yards' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/the-defoe-yards.jpg',
                    'caption' => 'The Defoe yards. Printed p. 14. Full page.',
                    'placeholder' => 'Extract from printed p. 14.',
                ],
                [
                    'type' => 'list',
                    'items' => [
                        '1. Main Gate #1',
                        '2. Main Office',
                        '3. Navy Office',
                        '4. Electronics Storeroom',
                        '5. Woodworking Shop and Kiln',
                        '6. Lumber Shed',
                        '7. Storage',
                        '8. Rigging Loft',
                        '9. Cabinet Shop',
                        '10. Boiler House',
                        '11. Fuel Oil Tank',
                        '12. 80 Ton Stiffleg Derrick',
                        '13. Boiler Fabrication Shop',
                        '14. Boiler Parts Storeroom',
                        '15. Machine Shop and Mold Loft Over',
                        '16. Stock Room',
                        '17. Transformers',
                        '18. Fire Station and Garage',
                        '19. Weld Rod Storage',
                        '20. Blacksmith Shop and Furnace',
                        '21. Punch Shop',
                        '22. Fabricating Building',
                        '23. Foreman’s Office',
                        '24. Locker',
                        '25. Crane Repair Shed',
                        '26. Steel Control Office',
                        '27. Paint Shop',
                        '28. Maintenance Shop',
                        '29. Air Compressor Shed',
                        '30. Navy Inspection Office, Electrical Shop, Storeroom, First Aid, Lunchroom',
                        '31. Portable Warehouse',
                        '32. Pipe Shop',
                        '33. Sheet Metal Shop',
                        '34. Switch House',
                        '35. Gate #2',
                        '36. Superintendent’s Office (Portable)',
                        '37. Machine Shop (Portable)',
                    ],
                ],
            ],
            'the-future' => [
                [
                    'type' => 'figure',
                    'src' => '/media/history/the-defoe-story/st-lawrence-seaway.jpg',
                    'caption' => 'The St. Lawrence Seaway linking a vital inland waterway of the mid continent to the trade marts of the world.',
                    'placeholder' => 'Extract from printed p. 16.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The completion of the St. Lawrence Seaway, of course, had a dramatic effect on shipbuilding in the Great Lakes region. Today, ships constructed at Defoe are no longer land-locked but, in fact, travel the world over.',
                ],
                [
                    'type' => 'p',
                    'text' => 'The great and growing potential in water transportation is evidenced today in construction contracts at Defoe . . . contracts that call for delivery of ocean-going craft . . . contracts for ships from other nations . . . contracts which open new and exciting horizons for Defoe.',
                ],
                [
                    'type' => 'p',
                    'text' => 'This water highway to the sea has created in every major Great Lakes city a potential international seaport. Answering the challenges of shipbuilding for new dimensions in international shipping, Defoe stands ready to increasingly serve the seagoing needs not only of the nation . . . but of the world.',
                ],
            ],
            default => [],
        };
    }
}
