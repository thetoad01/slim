<?php

namespace App\Shipbuild;

final class PerthCommendation
{
    public static function item(): Project
    {
        return new Project(
            hullNo: '02.5.1',
            tag: '1969',
            title: 'HMAS Perth Commendation',
            summary: 'U.S. Navy Unit Commendation to HMAS Perth (D-38), 21 July 1969. A Defoe-built DDG; the pamphlet is not a history of the yard.',
            slug: 'perth-commendation',
            linkLabel: 'Open the pamphlet',
            base: 'shipbuild/miscellaneous',
            lede: 'Admiral John J. Hyland presented the U.S. Navy Unit Commendation to HMAS Perth on 21 July 1969. Perth, Hobart, and Brisbane were built at Defoe.',
        );
    }

    public static function byline(): string
    {
        return 'Royal Australian Navy. Citation by the Secretary of the Navy.';
    }

    public static function presented(): string
    {
        return 'Pamphlet, 21 July 1969. Commander in Chief, U.S. Pacific Fleet, to HMAS Perth.';
    }

    /**
     * @return array{caption: string, src: string}
     */
    public static function cover(): array
    {
        return [
            'src' => '/media/archive/miscellaneous/perth-commendation/cover.jpg',
            'caption' => 'Cover. HMAS Perth (D-38). Commendation U.S. Navy Unit, 21 July 1969.',
        ];
    }

    /**
     * @return array{caption: string, src: string}
     */
    public static function insideCover(): array
    {
        return [
            'src' => '/media/archive/miscellaneous/perth-commendation/inside-cover.jpg',
            'caption' => 'Inside cover. HMAS Perth, Vietnam, September 1967–April 1968. Ship’s crest: Fight and Flourish.',
        ];
    }

    /**
     * Pamphlet outline. Section copy and figures will be added here.
     *
     * @return list<array{id: string, title: string, summary: string, href?: string}>
     */
    public static function sections(): array
    {
        return [
            [
                'id' => 'cover',
                'title' => 'Cover',
                'summary' => 'Commendation U.S. Navy Unit. Presented by Admiral John J. Hyland to HMAS Perth, 21 July 1969.',
                'href' => '#cover',
            ],
            [
                'id' => 'inside-cover',
                'title' => 'Inside cover',
                'summary' => 'HMAS Perth, Vietnam, September 1967–April 1968. Crest: Fight and Flourish.',
                'href' => '#inside-cover',
            ],
            [
                'id' => 'officers',
                'title' => 'Admiral John J. Hyland and Captain P. H. Doyle, RAN',
                'summary' => 'Commander in Chief, U.S. Pacific Fleet, and commanding officer of Perth, July 1966–April 1968.',
                'href' => '#officers',
            ],
            [
                'id' => 'citation',
                'title' => 'The U.S. Navy Unit Commendation',
                'summary' => 'What the award is, and the citation for 9 September 1967–5 April 1968.',
            ],
            [
                'id' => 'vietnam',
                'title' => 'HMAS Perth in Vietnam',
                'summary' => 'First tour under Doyle; second tour under Captain D. W. Leach.',
            ],
            [
                'id' => 'the-ship',
                'title' => 'HMAS Perth',
                'summary' => 'The Charles F. Adams-class DDG built at Defoe, Bay City.',
            ],
            [
                'id' => 'first-perth',
                'title' => 'The first HMAS Perth',
                'summary' => 'The light cruiser lost in Sunda Strait, 1942.',
            ],
        ];
    }

    /**
     * Posted pamphlet body. Later sections append here.
     *
     * @return list<array<string, mixed>>
     */
    public static function blocks(): array
    {
        $dir = '/media/archive/miscellaneous/perth-commendation';

        return [
            [
                'type' => 'heading',
                'id' => 'officers',
                'text' => 'Admiral John J. Hyland and Captain P. H. Doyle, RAN',
            ],
            [
                'type' => 'figures',
                'items' => [
                    [
                        'id' => 'hyland',
                        'src' => $dir . '/admiral-john-j-hyland.png',
                        'caption' => 'Admiral John J. Hyland.',
                    ],
                    [
                        'id' => 'doyle',
                        'src' => $dir . '/captain-p-h-doyle.png',
                        'caption' => 'Captain P. H. Doyle, RAN.',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'id' => 'hyland-bio',
                'text' => 'Admiral John J. Hyland',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'Admiral Hyland assumed duty as Commander in Chief, U.S. Pacific Fleet on 30 November, 1967. Prior to this he was Commander U.S. Seventh Fleet.',
            ],
            [
                'type' => 'p',
                'text' => 'Admiral Hyland graduated from the U.S. Naval Academy in May, 1934. He saw action during World War II in the islands north of Australia.',
            ],
            [
                'type' => 'p',
                'text' => 'He was Air Operations Officer on the staff of the Commander in Chief, U.S. Pacific Fleet, from August, 1956 to July, 1957 and subsequently had command of USS ONSLOW (1956–57) and USS SARATOGA (1958–59).',
            ],
            [
                'type' => 'p',
                'text' => 'Other appointments have included Commander Airborne Early Warning Wing, Atlantic and Commander Fleet Air, Argentina; Joint Staff, Commander in Chief, Atlantic Representative; Joint Strategic Target Planning Commander; Carrier Division Four; and Director of the Strategic Plans Division, Office of the Chief of Naval Operations.',
            ],
            [
                'type' => 'heading',
                'id' => 'doyle-bio',
                'text' => 'Captain P. H. Doyle, RAN',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'Captain Doyle entered the RAN as a cadet midshipman in January, 1939, graduating in July, 1942. He served in RAN and RN ships during the 1939–45 war and later specialised in navigation.',
            ],
            [
                'type' => 'p',
                'text' => 'In HMAS ANZAC he served in the Korean War and was mentioned in despatches. He later served as Navigating Officer on HMAS SYDNEY and as Fleet Navigating Officer.',
            ],
            [
                'type' => 'p',
                'text' => 'Captain Doyle became Chief Staff Officer to the Flag Officer Commanding the Australian Fleet in September, 1964. He commanded HMAS PERTH from July, 1966, to April, 1968. During this period his ship had six months service with the U.S. Seventh Fleet and Captain Doyle was again mentioned in despatches.',
            ],
            [
                'type' => 'p',
                'text' => 'He became Director of Naval Intelligence in July, 1968.',
            ],
        ];
    }
}
