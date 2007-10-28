<?php # $Id$

        @define('PLUGIN_KARMA_VERSION', '1.3');
        @define('PLUGIN_KARMA_NAME', 'Karma');
        @define('PLUGIN_KARMA_BLAHBLAH', 'Abstimmung �ber die Eintr�ge');
        @define('PLUGIN_KARMA_VOTETEXT', 'Karma dieses Eintrags: ');
        @define('PLUGIN_KARMA_RATE', 'Eintrag bewerten: %s');
        @define('PLUGIN_KARMA_VOTEPOINT_1', 'Sehr gut!');
        @define('PLUGIN_KARMA_VOTEPOINT_2', 'Gut');
        @define('PLUGIN_KARMA_VOTEPOINT_3', 'Neutral');
        @define('PLUGIN_KARMA_VOTEPOINT_4', 'Uninteressant');
        @define('PLUGIN_KARMA_VOTEPOINT_5', '�bel');
        @define('PLUGIN_KARMA_VOTED', 'Punktzahl "%s" gespeichert.');
        @define('PLUGIN_KARMA_INVALID', 'Bewertung ung�ltig oder manipuliert!');
        @define('PLUGIN_KARMA_ALREADYVOTED', 'Bewertung bereits gespeichert.');
        @define('PLUGIN_KARMA_NOCOOKIE', 'Der Browser muss Cookies unterst�tzen um eine Abstimmung zu erm�glichen.');
        @define('PLUGIN_KARMA_CLOSED', 'Stimm ab f�r Artikel, die j�nger als %s Tage sind!');
        @define('PLUGIN_KARMA_ENTRYTIME', 'Abstimmungszeitraum nach Ver�ffentlichung eines Artikels');
        @define('PLUGIN_KARMA_VOTINGTIME', 'Abstimmungszeitraum');
        @define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'Wie lang (in Minuten) kann nach der Ver�ffentlichung eines Artikels ein uneingeschr�nkter Abstimmungszeitraum durchgef�hrt werden? Standard sind 1440 Minuten (ein Tag).');
        @define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Wartezeit (in Minuten), die nach einer Stimmabgabe vergehen muss bevor eine n�chste Stimme angenommen wird. Diese Einschr�nkung gilt erst nach �berschreitung des obigen uneingeschr�nkten Abstimmungszeitraumes. Standard: 5 Minuten.');
        @define('PLUGIN_KARMA_TIMEOUT', 'Wahlschutz: Ein anderer Besucher hat gerade abgestimmt. Bitte %s Minuten warten.');
        @define('PLUGIN_KARMA_CURRENT', 'Derzeitiges Karma: %2$s, %3$s Stimme(n)');
        @define('PLUGIN_KARMA_EXTENDEDONLY', 'Nur erweiterte Artikel');
        @define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Karmavoting nur im erweiterten Artikel einblenden');
        @define('PLUGIN_KARMA_MAXKARMA', 'Maximaler Abstimmungszeitraum');
        @define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Abstimmungen nur erlauben bis der Artikel X Tage alt ist (Standard: 7)');
        @define('PLUGIN_KARMA_LOGGING', 'Protokollieren');
        @define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Sollen Logfiles der Votes angelegt werden?');
        @define('PLUGIN_KARMA_ACTIVE', 'Karmavoting aktivieren?');
        @define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'Soll das Karmavoting verf�gbar sein?');
        @define('PLUGIN_KARMA_VISITS', 'Aufrufstatisik aktivieren?');
        @define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'Soll jeder Klick auf einen Artikel gez�hlt und dargestellt werden?');
        @define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s Klicks');
        @define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Meistbesuchte Artikel');
        @define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Wenigstbesuchte Artikel');
        @define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Meistbewertete Artikel');
        @define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Wenigstbewertete Artikel');
        @define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Bestbewertete Artikel');
        @define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Schlechtstbewerte Artikel');
        @define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'Besuche');
        @define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'Stimmen');
        @define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'Punkte');


        @define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS', 'Aufrufstatistik auch f�r eingeloggte Benutzer?');
        @define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH', 'Wenn diese Option eingeschaltet ist, dann werden auch die Besuche von eingeloggten Benutzern protokolliert.');
