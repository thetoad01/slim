<?php

namespace App\Shipbuild;

final class RelatedLinks
{
    /** @return list<RelatedLink> */
    public static function all(): array
    {
        return [
            new RelatedLink(
                source: 'Superyacht History',
                title: 'The history of the Defoe Cruisemaster series',
                url: 'https://www.superyachthistory.com/the-history-of-the-defoe-cruisemaster-series/',
                summary: 'Malcolm Wood, for SuperYacht Times, on a yacht builder that is gone and the Cruisemaster series it sent out from Bay City.',
                credit: 'Posted on February 9, 2021 by Malcolm J. Wood',
            ),
            new RelatedLink(
                source: 'National Museum of the Great Lakes',
                title: 'Fighting Ships from Bay City',
                url: 'https://nmgl.org/fighting-ships-from-bay-city/',
                summary: 'A wartime account of the yard’s naval output on the Saginaw River: minesweepers, patrol craft, landing craft, and destroyer escorts. The roll-over — hulls built upside down, then rotated for downhand welding — and Captain William H. Booth’s freshwater delivery voyages from Bay City through the lakes to Chicago and on to New Orleans for commissioning.',
                credit: 'By Bert C. Brennan — Inland Seas, July 1945',
            ),
            new RelatedLink(
                source: 'Military History of the Upper Great Lakes',
                title: 'Defoe Shipbuilding Company',
                url: 'https://ss.sites.mtu.edu/mhugl/2017/10/21/history-of-the-defoe-shipbuilding-company/',
                summary: 'From a wooden boat shop co-founded by H. J. Defoe, F. W. Defoe, and G. H. Whitehouse in 1905, to warships and support craft for the U.S. and Australian navies. The river became a naval powerhouse; notable hulls include USS Escanaba, USS Rich, HMAS Brisbane, and HMAS Perth. The yard closed in 1976 and was sold to H. H. Hirshfield & Sons.',
                credit: 'Published 21 October 2017 by Ryan Bancroft',
            ),
            new RelatedLink(
                source: 'USS Henry B. Wilson (DDG-7)',
                title: 'Henry B. Wilson',
                url: 'https://www.usshenrybwilsonddg7.com/tbo/History.htm',
                summary: 'First ship of the name, and the first of the Navy’s first class of destroyers built from the keel up to fire guided missiles. Built at this yard. At commissioning she was the largest warship ever constructed on the Great Lakes. Christened by Mrs. Patrick J. Hurley, daughter of Admiral Wilson. Side-launched 22 April 1959. The champagne bottle held water from the Great Lakes, the St. Lawrence, and the Atlantic.',
            ),
            new RelatedLink(
                source: 'Shipbuilding History',
                title: 'Defoe Shipbuilding',
                url: 'http://shipbuildinghistory.com/shipyards/large/defoe.htm',
                summary: 'Harry J. Defoe, school principal; Frederick W. Defoe, lawyer; George H. Whitehouse, wholesale fish. Defoe Boat & Motor Works, 1905; Defoe Shipbuilding Company at the start of the war; closed 1976, the site now a scrapyard. An extensive vessel list with years and delivery dates.',
                credit: 'Most recent update: September 3, 2014',
            ),
            new RelatedLink(
                source: 'BGSU University Libraries — Great Lakes Maritime History',
                title: 'Defoe Shipbuilding Company — archival collections',
                url: 'https://lib.bgsu.edu/findingaids/agents/corporate_entities/525',
                summary: 'Bowling Green State University’s Center for Archival Collections holds finding aids for Defoe records, including The Rollover, the employee periodical from December 1942 through November 1944: company status, the war effort, and what the yard wrote down about itself.',
            ),
            new RelatedLink(
                source: 'Wisconsin Marine Historical Society',
                title: 'Ships That Were Built Upside Down',
                url: 'https://wmhs.org/ships-that-were-built-upside-down/',
                summary: 'The roll-over: hulls built upside down so welders could work downhand, then rotated upright on 50-foot eccentric wheels in under five minutes. How the method helped the yard produce 154 WWII naval vessels, including 58 patrol craft and 26 destroyer escorts. Notes on the cutter Escanaba, PC-1129, and the presidential yacht Lenore.',
                credit: 'By James Heinz — May 11, 2025',
            ),
            new RelatedLink(
                source: 'Wikipedia',
                title: 'Defoe Shipbuilding Company',
                url: 'https://en.wikipedia.org/wiki/Defoe_Shipbuilding_Company',
                summary: 'An overview from 1905 on the Saginaw River through the war contracts, the postwar Charles F. Adams-class destroyers, and the 1976 closure. Early fishing boats, the roll-over, minesweepers and guided-missile destroyers, and what became of the site.',
            ),
        ];
    }
}
