<?php

namespace App\History;

final class WartimeHistoryPreface
{
    /**
     * @return list<array{type: string, text?: string, items?: list<string>}>
     */
    public static function blocks(): array
    {
        return [
            [
                'type' => 'heading',
                'text' => 'Preface',
            ],
            [
                'type' => 'p',
                'text' => '1. This wartime history has been prepared in general following the outline on “Topics of Special Interest to Bureau of Ships Historical Section in the Preparation of Histories of Supervisors of Shipbuilding” furnished with BuShips ltr. EN/A3-2(130) of 11 January 1946.',
            ],
            [
                'type' => 'p',
                'text' => '2. Two preliminary sections, or parts: first, the chronological history of the contractors and their production, and second, the organization and development of the supervisors’ offices, were prepared to provide some background for the other parts of the outline, which follows as Parts III to VIII inclusive, corresponding to Parts I to V of the Bureau’s outline. An additional Part VIII has been included to cover a few special subjects.',
            ],
            [
                'type' => 'p',
                'text' => '3. Originally it was intended to go into more detail in the two preliminary sections, but it has been found necessary to curtail these sections to prevent the history becoming too bulky.',
            ],
            [
                'type' => 'p',
                'text' => '4. It has been impossible to mention all of the personnel involved in these organizations, although a few have been mentioned for clarity. No attempt has been made to even bring out the outstanding officers, enlisted men or civilians. It is hoped that all those not mentioned will not feel slighted, but consider that they have been thanked individually for their valuable part in the development, maintenance, and conclusion of an activity which well performed its portion of the great war effort.',
            ],
            [
                'type' => 'p',
                'text' => '5. Acknowledgement is given of the assistance of Lt. Comdr. G. E. Mallon for the history of the Algonac office (Exhibit No. 2), and of Lt. T. B. Dickinson on portions of Parts VI and VII.',
            ],
            [
                'type' => 'heading',
                'text' => 'Introduction',
                'id' => 'introduction',
            ],
            [
                'type' => 'p',
                'text' => '1. The “History of the office of the Supervisor of Shipbuilding, USN, Bay City, Michigan” will include the story of the office of the Supervisor of Shipbuilding, USN, Detroit, Michigan, and its branch offices, since these were for the most part concurrently under the direction of the Bay City office.',
            ],
            [
                'type' => 'p',
                'text' => '2. Considerable boat-building and shipbuilding supervision was carried on in the early days by periodic visits of officers and civilian inspectors from Bay City, supplemented by inspections from the Bureau of Ships. Resident inspection personnel were assigned to outlying yards as projects and staffing allowed.',
            ],
            [
                'type' => 'p',
                'text' => '3. The total ship and small craft program overseen by these offices—excluding the Benton Harbor and Macatawa (Holland) branches that transferred to SupShip Chicago in 1942—amounted to:',
            ],
            [
                'type' => 'list',
                'items' => [
                    'Vessels over 100’ in length: 185; about 75,000 tons.',
                    'Small craft under 100’ in length: 12,831; 93,785 tons; contract value $216,443,000.',
                ],
            ],
            [
                'type' => 'p',
                'text' => '4. The distribution within the major production groups highlights the concentration of work handled by two contractors:',
            ],
            [
                'type' => 'heading',
                'text' => 'First Group — Defoe Shipbuilding Co.',
            ],
            [
                'type' => 'list',
                'items' => [
                    'Vessels: 154 of 183 (84%).',
                    'Tonnage: 73,604 of 76,069 (96.8%).',
                    'Value: $140,000,000 of $144,000,000 (97.2%).',
                ],
            ],
            [
                'type' => 'heading',
                'text' => 'Second Group — Chris-Craft Corp.',
            ],
            [
                'type' => 'list',
                'items' => [
                    'Craft: 12,284 of 12,831 (95.7%).',
                    'Tonnage: 92,130 of 93,785 (98.25%).',
                    'Value: $70,000,000 of $72,443,000 (96.6%).',
                ],
            ],
        ];
    }
}
