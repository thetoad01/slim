<?php

namespace App\History;

final class WartimeHistoryPartIX
{
    /**
     * @return list<array{type: string, text?: string, id?: string, items?: list<string>}>
     */
    public static function blocks(): array
    {
        return [
            [
                'type' => 'heading',
                'text' => 'Conclusion',
                'id' => 'conclusion',
            ],
            [
                'type' => 'p',
                'text' => '1. It has been difficult at this time to properly cover the history of supervisors’ offices over a period of nearly seven years, especially where no special effort was made to provide information in the files in convenient form to cover the information desired by the Bureau. However, considerable data was assembled in the research process for the basis of this history, which could not be included because of its magnitude and probable low interest to many.',
            ],
            [
                'type' => 'p',
                'text' => '2. Generally speaking it is considered that the contractors did a marvelous and in some cases almost miraculous job of production for the Navy, and the Navy can feel reasonably proud of the results of its supervision and inspection.',
            ],
            [
                'type' => 'p',
                'text' => '3. One of the lessons apparently to be learned from this experience is the necessity for better selection and indoctrination of the personnel assigned to the supervisors’ offices. It would appear desirable in case of another war emergency to start with a special school of indoctrination for supervisors of shipbuilding and their principal assistants, as it is difficult to learn all the ropes from books, even a most excellent “manual.”',
            ],
        ];
    }
}
