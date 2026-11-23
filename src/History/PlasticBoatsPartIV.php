<?php

namespace App\History;

final class PlasticBoatsPartIV
{
    /**
     * @return list<array{type: string, text?: string, ordered?: bool, items?: list<string>}>
     */
    public static function blocks(): array
    {
        return [
            [
                'type' => 'p',
                'text' => 'Basic considerations bearing on the design of the vessel were:',
            ],
            [
                'type' => 'list',
                'ordered' => true,
                'items' => [
                    'Hull shape was to be identical to that of the wood MSB-5 class but allowing minor deviations to suit plastic construction. The principle deviation involved the re-design of the stem and forefoot of the vessel, eliminating the stem timber and incorporating rounded sections throughout.',
                    'The hull was to be of monolithic reinforced plastic construction. Sectional construction of the hull was not considered. There was a question as to whether the vessel should be of single skin construction with the usual framing, or whether double skin "sandwich" construction should be used. The latter type, due to the greater stiffness of the sandwich panel, would eliminate the need for most of the framing. Shortly after the abandoning of the Marco method-single skin concept, sandwich construction was adopted.',
                    'Total overall weight was to be within specified limits. This was the principal consideration affecting hull design as it imposed a limit on unit weight of about five pounds per square foot for the hull shell including framing.',
                    'The hull structure was to be strong enough to permit hoisting the vessel at 50% over design weight. A basic strength analysis was made including lift forces, gravity forces, couple resolution, shear forces, bending moments, section moments of inertia and neutral axes, and was based on a hoisting weight of 135,000 lbs, being equal to 90,000 lbs, the full load weight of the vessel, plus 45,000 lbs in additional ballast to be so distributed as to maintain the designed position of the longitudinal center of gravity. See Appendix D. Under these conditions, the maximum bending moment is 104,153 ft-lbs and occurs near the midship section. The moment of inertia of the hull structure at this point is 2126 in²-ft.² Using the formula f = M / I, the maximum stress in the keel is found to be 189 PSI which indicates a safety factor of about 60. Since the effects of local abuse on sandwich hulls are largely unpredictable, the structural laminate determination was based primarily on the maximum permissible weight per unit area rather than upon the above calculations, and no effort was made to take advantage of the excess of strength through use of thinner laminates.',
                    'Parts and sub-assemblies were to follow MSB-5 plans as to general shape, arrangement, and function, but to be re-designed as far as possible to make best use of properties of reinforced plastics, keeping weight to a minimum.',
                    'All materials were to be non-magnetic. The contemplated use of the vessel as a minesweeper indicated the necessity of keeping its overall magnetic field to an absolute minimum. The use of metals as secondary structural materials was to be permitted provided they be non-magnetic and that no closed loops be formed.',
                    'Provision was to be made so that hardware and equipment as furnished by the government and the central procurement agency for the MSB-5 class could be incorporated, including minesweeping and related equipment.',
                ],
            ],
        ];
    }
}
