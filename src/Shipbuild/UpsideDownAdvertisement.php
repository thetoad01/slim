<?php

namespace App\Shipbuild;

final class UpsideDownAdvertisement
{
    public static function item(): Project
    {
        return new Project(
            hullNo: '02.5.2',
            tag: 'Wartime',
            title: 'How Defoe Turns Things Upside Down',
            summary: 'Full-page magazine advertisement for the roll-over. Destroyer escorts built upside down, then rolled upright. Page 68.',
            slug: 'how-defoe-turns-things-upside-down',
            linkLabel: 'Read the advertisement',
            base: 'shipbuild/miscellaneous',
            lede: 'A full-page advertisement. The illustration shows a destroyer escort on the roll-over wheels. The magazine and the date are not on the page.',
        );
    }

    public static function byline(): string
    {
        return 'Defoe Shipbuilding Company.';
    }

    public static function presented(): string
    {
        return 'Full-page magazine advertisement, p. 68. Magazine and date are not on the page. Transcript from the scan.';
    }

    /**
     * @return list<array<string, mixed>>
     */
    public static function blocks(): array
    {
        $src = '/media/archive/miscellaneous/how-defoe-turns-things-upside-down/page.jpg';

        return [
            [
                'type' => 'figure',
                'src' => $src,
                'caption' => 'How Defoe Turns Things Upside Down. Magazine advertisement, p. 68.',
                'alt' => 'Full-page magazine advertisement, How Defoe Turns Things Upside Down, page 68.',
            ],
            [
                'type' => 'heading',
                'text' => 'How Defoe Turns Things Upside Down',
                'id' => 'advertisement',
            ],
            [
                'type' => 'heading',
                'text' => 'To double production of warships!',
                'level' => 3,
            ],
            [
                'type' => 'p',
                'text' => 'With record-breaking frequency, these days, flashing axes bite through stay-hawsers on the launching ways of the Defoe Shipbuilding Company at Bay City, Michigan . . . sending another and another destroyer escort ship for the Navy sliding down to blue water.',
            ],
            [
                'type' => 'p',
                'text' => 'These are the famous DE fighting ships whose terrific execution among the U-boat wolf packs has helped to bring the submarine menace under control.',
            ],
            [
                'type' => 'p',
                'text' => 'Welded into one 750-ton piece of steel, more than 300 feet in length, the sturdy, hard-hitting DE type ships are built upside down and then “rolled over” in their cradles to complete their equipment. This unique Defoe method of building ocean-going ships, eliminates the need of conventional ship scaffolding and by enabling workers to stand over the job from beginning to end gives remarkable advantages in saving time and labor costs.',
            ],
            [
                'type' => 'p',
                'text' => 'Among results obtained by Defoe engineering methods is the doubling of production per man hour—with twice as many ships being built at half the labor cost per vessel!',
            ],
            [
                'type' => 'p',
                'text' => 'Until the Axis is defeated, the full facilities of the Defoe organization will be concentrated exclusively on all-out production for Victory.',
            ],
            [
                'type' => 'quote',
                'text' => '“Next to our immediate task of building warships faster and faster, the first responsibility of Defoe is to plan for post-war operation that will provide the maximum of gainful employment.”',
            ],
            [
                'type' => 'p',
                'text' => 'Harry J. Defoe. Founder Defoe Shipbuilding Co.',
            ],
            [
                'type' => 'p',
                'text' => 'But tomorrow, when Peace is restored, the experience and improved techniques learned in war work will be used to create new high standards of quality, value and economy in finer products for the consumers of America.',
            ],
            [
                'type' => 'p',
                'text' => 'Back the attack—buy War Bonds. Defoe workers take more than 10% of their pay in War Bonds.',
            ],
            [
                'type' => 'p',
                'text' => 'Defoe Shipbuilding Company, Bay City, Michigan.',
            ],
            [
                'type' => 'note',
                'text' => 'Three White Star Renewal Citations now decorate the Navy “E” Award won by Defoe workers.',
            ],
            [
                'type' => 'p',
                'text' => 'Ships for Victory. Servants for Peace.',
            ],
        ];
    }
}
