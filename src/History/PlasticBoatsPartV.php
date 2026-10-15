<?php

namespace App\History;

final class PlasticBoatsPartV
{
    /**
     * @return list<array{type: string, text?: string, id?: string, level?: int, ordered?: bool, items?: list<string>}>
     */
    public static function blocks(): array
    {
        return [
            [
                'type' => 'heading',
                'text' => 'The Hull Shell',
                'id' => 'the-hull-shell',
            ],
            [
                'type' => 'p',
                'text' => 'The hull shell structure itself was the primary design problem. Generally, considerations involved were: First, the overall weight limitation which governed the amount of material which could be used per unit area; and second, the nature and distribution of these materials to insure maximum strength and integrity. Specifically, these elements were: the kind and thickness of core material, finally determined as cotton honeycomb 1-3/4" thick; the number of plies in the outer and inner laminates; finally set at seven plies of style 1044 cloth in the outer skin and four plies of 1044 cloth in the inner skin, with one ply of impregnated 1 1/2 oz/ft² mat as a bonding ply between laminates and honeycomb. Continuous longitudinal flat bar stiffeners consisting of five plies of 1044 cloth were to be included between courses of honeycomb. This would give a spacing between stiffeners of 9" or less.',
            ],
            [
                'type' => 'heading',
                'text' => 'The Stem',
                'id' => 'the-stem',
            ],
            [
                'type' => 'p',
                'text' => 'The stem reinforcement as developed consisted of a solid laminate 2-1/8" thick and reaching 5" either side of the stem centerline. Each side of the outer portion tapered in 11" from a thickness of 1-1/8" to the thickness of the outer skin. See Fig. 6, page 34.',
            ],
            [
                'type' => 'note',
                'text' => 'Fig. 6, page 34, is cited above. That scan is not on the live part page, so it is not posted here.',
            ],
            [
                'type' => 'heading',
                'text' => 'Deck Construction',
                'id' => 'deck-construction',
            ],
            [
                'type' => 'p',
                'text' => 'Deck construction was to parallel hull structure in general. The first concept called for fabricating the deck in five sections and then assembling and connecting these sections to each other and to the hull, the sheer line of which would be trimmed to take the deck. On further thought, it became apparent that this method could be improved upon, since each section would have to have its own mold to conform to the changes in sheer throughout the length of the hull; and the work of joining these sections into one fair surface, while entirely possible, would be too expensive. The alternative method finally developed called for trimming the sheer line of the hull to the desired conformity and installing a temporary plywood deck, reinforced by the permanent deck beams in the hull and by additional temporary wooden beams as necessary.',
            ],
            [
                'type' => 'p',
                'text' => 'This plywood surface would serve as a mold for the deck proper which could then be fabricated in one piece, wedged up to allow removal of the plywood mold platen and then lowered into final position and fastened to the hull and to the deck beams.',
            ],
            [
                'type' => 'heading',
                'text' => 'The Keel',
                'id' => 'the-keel',
            ],
            [
                'type' => 'p',
                'text' => 'Keel design concepts in order of their consideration together with the reasons for their ultimate rejection or acceptance were:',
            ],
            [
                'type' => 'list',
                'ordered' => true,
                'items' => [
                    'Keel to be molded integral with hull; such a procedure would complicate the mold structure and slow down the hull layup. In addition, in the event of damage to the keel, the hull itself would be breached.',
                    'A solid box section keel with C.C.A. core was considered next, to be fastened to the hull with through-bolts more or less in accordance with wood boat practice. Fabricating such a keel in one or two pieces would have involved additional molds and would have been costly to fit to the hull. Through-bolts would add weight and possibility of leakage.',
                    'The method settled upon called for fabricating the low-density keel core including any necessary reinforcements and erecting this on the inverted hull. The keel laminate was to be laid up over the core assembly with tapered flanges bonded to the hull on either side. Self-tapping fastenings through the flanges into the hull were contemplated but were subsequently eliminated as it appeared that the secondary bond would be adequate considering that the heavy lifting bolts would aid in securing the keel to the hull. Also, any serious damage to the keel would then be less likely to affect the integrity of the hull.',
                ],
            ],
            [
                'type' => 'heading',
                'text' => 'Internal Structural Components',
                'id' => 'internal-structural-components',
            ],
            [
                'type' => 'heading',
                'text' => 'Bulkheads',
                'id' => 'bulkheads',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'Bulkheads were to be sandwich panels, prefabricated and cut to fit the hull at installation. Connection to the hull and deck was to be by means of 3/16" plastic bounding angles cured in place, the secondary bonds to be augmented by self tapping screws set in epoxy resin.',
            ],
            [
                'type' => 'heading',
                'text' => 'Longitudinal Girders',
                'id' => 'longitudinal-girders',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'There was some question as to whether girders would be continuous or intercostal. It was decided that under the most severe conditions to which the vessel would be subjected, namely hoisting, the girders would be principally under compressive stresses. Under these conditions, intercostal girder sections would be satisfactory. Use of intercostal girder sections would greatly simplify both girder and bulkhead installation. Girders were to consist of a 3/4" thick vertical web of sandwich construction with a 3/8" x 2-3/4" solid flange along the top. Plastic angles laid up in place were to connect the girder web to the inside of the hull. Connection of the ends of the girder sections to and through the bulkheads was to be done by means of bolted aluminum angles. See Fig. 7, page 34.',
            ],
            [
                'type' => 'note',
                'text' => 'Fig. 7, page 34, is cited above. That scan is not on the live part page, so it is not posted here.',
            ],
            [
                'type' => 'heading',
                'text' => 'Transverse Bracketing',
                'id' => 'transverse-bracketing',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'Transverse floors of 3/16" solid laminate were to be installed at two-foot intervals to further support the girders and to take the walking flats.',
            ],
            [
                'type' => 'heading',
                'text' => 'Walking Flats',
                'id' => 'walking-flats',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'Plywood flats were allowed, but plastic sandwich panels were provided which, because of their greater stiffness, would require fewer transverse floors for support.',
            ],
            [
                'type' => 'heading',
                'text' => 'Bolting Provisions',
                'id' => 'bolting-provisions',
            ],
            [
                'type' => 'p',
                'text' => 'The problem of providing material between the faces of sandwich panels to resist compressive stresses of through-bolts was solved in two ways:',
            ],
            [
                'type' => 'list',
                'ordered' => true,
                'items' => [
                    'For bolts the locations of which could not be known in advance, slugs of filled resin were injected between the skins after the bolt hole had been drilled and the honeycomb routed back around the hole. A mixture of 30% Edgar ASP filler and 70% Marcothix resin proved satisfactory.',
                    'In known through-bolt areas, solid laminate was provided.',
                ],
            ],
        ];
    }
}
