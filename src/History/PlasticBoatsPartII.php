<?php

namespace App\History;

final class PlasticBoatsPartII
{
    /**
     * @return list<array{type: string, text?: string, id?: string, level?: int, src?: string, caption?: string, link?: bool, items?: list<string>}>
     */
    public static function blocks(): array
    {
        return [
            [
                'type' => 'heading',
                'text' => 'The Marco Method',
                'id' => 'the-marco-method',
            ],
            [
                'type' => 'p',
                'text' => 'While the Marco method was not investigated by the contractor, its use was considered for the molding of a single skin hull with integrally molded transverse framing, and early design was based on this method. It is therefore thought best to include here the essentials of this process, together with the reasons for its ultimate rejection.',
            ],
            [
                'type' => 'p',
                'text' => 'The Marco method involves a dry layup between matched male and female molds. The glass reinforcements - cloth, mat and roving - are laid up over the inverted male mold and the female mold is closed over the layup. From a trough at the bottom of the mold assembly, catalyzed low-viscosity resin is drawn up through the layup by means of vacuum or a combination of pressure and vacuum until the resin appears in sight glasses above the mold assembly. The resin is held at this level until the cure is accomplished through the application of heat to the molds. When cure is complete, the molds are parted and the hull shell removed and placed in a suitable cradle for subsequent finishing operations.',
            ],
            [
                'type' => 'figure',
                'src' => '/media/history/plastic-boats/figure-2.jpg',
                'caption' => 'Fig. 2. The Marco method. Impregnation partially complete.',
                'id' => 'fig-2',
                'link' => true,
            ],
            [
                'type' => 'p',
                'text' => 'As of early 1952, research and development on the plastic MSB was in the hands of the Atlas Machine and Iron Works of Arlington, Virginia. A considerable development program involving the Marco method had been undertaken and the findings of this program were to have been applied to the construction by Defoe of the two vessels, MSB23 and MSB24.',
            ],
            [
                'type' => 'p',
                'text' => 'These findings indicated that the possibility of successfully molding an object as large and complicated as a 57 foot boat by this method was remote, as there were too many factors that could make the outcome doubtful. Among these were:',
            ],
            [
                'type' => 'list',
                'items' => [
                    'The difficulty of making a dry layup such that loading would be optimum at all points in the layup and of having such layup remain undisturbed during closing of the female mold. Most likely difficulties arising from this factor would be resin-rich areas subject to later cracking and crazing and resin starved areas in the layup caused by excessive reinforcement pinching off the resin flow.',
                    'Any leakage in the mold assembly could result in faulty operation of the impregnating system and/or the introduction of quantities of air into the impregnated layup, making for both excessive porosity and structural weakness.',
                    'The height through which the resin must be raised would indicate the need for a relatively high vacuum and sufficient rigidity in the molds to prevent the mold cavity from being collapsed by atmospheric pressure, pinching off the resin flow.',
                    'A large number of vacuum takeoff points would be required to assure uniform impregnation over the entire hull area.',
                    'Once begun, the process and the materials involved would be committed to the successful completion of the operation with no opportunity to stop, adjust and start over.',
                ],
            ],
            [
                'type' => 'p',
                'text' => 'On an object the size of a 57 foot boat, the cost of the materials involved would be of such magnitude as to make the undertaking of so precarious an operation undesirable.',
            ],
            [
                'type' => 'heading',
                'text' => 'The Open Mold, Hand Layup Process',
                'id' => 'the-open-mold-hand-layup-process',
            ],
            [
                'type' => 'p',
                'text' => 'At about the time of the decision to abandon the Marco method, it was decided to concentrate entirely on double skin "sandwich" construction, and the open mold process utilizing one of a number of materials - techniques combinations was looked upon as being the most likely general method for fabricating a large plastic boat.',
            ],
            [
                'type' => 'heading',
                'text' => 'The Wet Layup',
                'id' => 'the-wet-layup',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'The usual reinforced plastic fabrication method used in open mold procedures is the wet layup, involving application of successive layers of cloth (either dry or impregnated) and resin until the desired laminate thickness is built up. The basic process is applicable to either male or female molds, the choice in general being determined by whether the best surface is desired on the inside or outside of the part. In the case of a boat hull, a female mold is indicated. The wet layup technique as practiced at that time had, however, significant disadvantages which eliminated it from consideration as a possible means for constructing the vessel in question. These were: First, the tendency for resin to drain down out of vertical layups, which in this case would involve a large part of the hull unit; and second, the fact that it was considered desirable to complete the entire layup prior to curing. Pot life of resins then available was generally too short.',
            ],
            [
                'type' => 'heading',
                'text' => 'Layup With Preimpregnated Cloths',
                'id' => 'layup-with-preimpregnated-cloths',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'Pre-impregnated cloths offered a way in which to utilize the open mold idea, since they eliminated the drawbacks of wet layup procedure, namely resin drainage and short pot life. The cloth was supplied impregnated with a partially cured resin so that while there was an inherent tack which assisted in holding the laminate together, the resin would not flow to lower levels, at least until subject to final curing temperatures. At this time a vacuum blanket could be used to prevent such drainage. Curing of pre-pregs required the application of light pressures and temperatures upwards of 175°F. Pressure requirements could be met by vacuum bagging. Pre-pregs, however, had their own disadvantages, principal among which were: First, pre-pregs almost without exception would contain a small air bubble at every interstice of the cloth weave. In curing, these voids would sometimes become interconnected over several plies and undesirable porosity would result (see water penetration tests). Second, the aggressive tack of the material, while it helped to hold the laminate together, was a severe disadvantage when it became necessary to adjust a ply, once in place. Such adjustment usually caused the separation of other plies whose displacement was not desired. However, even considering these drawbacks, pre-pregs at that time appeared to be the best means available for fabricating the boat.',
            ],
            [
                'type' => 'p',
                'text' => 'Having tentatively settled on pre-impregnated cloths for the laminates, a program of fabricating and testing small sandwich panels was undertaken in an effort to determine the most suitable core material, the best method for bonding laminates to core material, the optimum number of plies inner and outer skins, and core thickness. These tests covered a considerable period of time and are described elsewhere (Tests, Chronological Sequence) along with results obtained and conclusions drawn.',
            ],
            [
                'type' => 'heading',
                'text' => 'Layup With Thixotropic Resins',
                'id' => 'layup-with-thixotropic-resins',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'While the test program was in progress a new thixotropic resin was made available which promised to eliminate the major drawbacks of both wet layup procedure and pre-preg laminating.',
            ],
            [
                'type' => 'p',
                'text' => 'First, the property of thixotropy took care of resin drainage as a factor, since such resins at rest exhibit high viscosity. Second, laminates made with the new resin appeared far superior to those made with pre-pregs, and third, since the new resin could be cured at room temperature, costly heating provisions would be unnecessary. Essentially void-free laminates were made with relative ease. During the course of further investigation, it became apparent that some pre-pregs gave inconsistent results. In fact, with one shipment it was not possible to fabricate an acceptable simple laminate. In the same period it was found that secondary bonds with the thixotropic resins approached primary bonds in their ability to resist delamination. It was now evident that large structures could be fabricated without the necessity for delaying cure till the layup was complete. One day\'s production could be cured and the following days layup bonded to the preceding without the danger of a serious discontinuity existing in the area of the secondary bond.',
            ],
            [
                'type' => 'p',
                'text' => 'As of early 1953, pre-pregs were abandoned in favor of wet layup with room temperature curing thixotropic resins.',
            ],
        ];
    }
}
