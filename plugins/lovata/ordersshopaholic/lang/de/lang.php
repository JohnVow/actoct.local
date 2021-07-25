<?php return [
    'plugin'               => [
        'name'        => 'Bestellungen für Shopaholic',
        'description' => 'Warenkorb und Auftragserstellung',
    ],
    'component'            => [
        'cart_name'                       => 'Warenkorb',
        'cart_description'                => '',
        'make_order_name'                 => 'Bestellung erstellen',
        'make_order_description'          => 'Erstellt eine neue Bestellung',
        'payment_method_list_name'        => 'Zahlungsarten',
        'payment_method_list_description' => '',
        'shipping_type_list_name'         => 'Lieferarten',
        'shipping_type_list_description'  => '',
        'status_list_name'                => 'Bestellstatus',
        'status_list_description'         => '',
        'order_page_name'                 => 'Bestellseite',
        'order_page_description'          => '',
        'send_payment_purchase'           => 'Senden Sie den Zahlungsauftrag, nachdem Sie die Bestellung erstellt haben.',
        'user_address_name'               => 'Benutzeradresse',
        'user_address_description'        => 'Erstellen/Aktualisieren/Entfernen',
    ],
    'tab'                  => [
        'info'             => 'Bestelldaten',
        'offers_info'      => 'Angebotsliste',
        'order_settings'   => 'Bestellung und Warenkorb',
        'gateway'          => 'Gateway',
        'payment_data'     => 'Zahlungsdaten',
        'discount_info'    => 'Rabattinformationen',
        'billing_address'  => 'Rechnungsadresse',
        'shipping_address' => 'Lieferadresse',
        'tasks'            => 'Aufgaben',
    ],
    'message'              => [
        'empty_cart'           => 'Warenkorb ist leer',
        'offer_not_found'      => 'Angebot wurde nicht gefunden!',
        'insufficient_amount'  => 'Angebot ist nicht verfügbar!',
        'order_id_required'    => 'Verknüpfung zwischen Position und Bestellung ist erforderlich!',
        'cart_id_required'     => 'Verknüpfung zwischen Position und Warenkorb ist erforderlich!',
        'item_required'        => 'Verknüpfung zwichen Position und Artikel ist erforderlich!',
        'without_condition'    => 'Ohne Bedingung',
        'discount_not_applied' => 'Nicht angewandter Rabatt',
    ],
    'field'                => [
        'status'       => 'Status',
        'order_number' => 'Bestellnummer',
        'user'         => 'Käufer',

        'new'         => 'Neu',
        'canceled'    => 'Abgebrochen',
        'complete'    => 'Abgeschlossen',
        'in_progress' => 'In Bearbeitung',

        'total_price'                    => 'Gesamtbetrag',
        'old_total_price'                => 'Alter Gesamtbetrag',
        'position_price'                 => 'Positionspreis',
        'old_position_price'             => 'Alter Positionspreis',
        'shipping_price'                 => 'Lieferkosten',
        'catalog_price'                  => 'Aktueller Betrag',
        'offer_list'                     => 'Angebotsliste',
        'position_total_price'           => 'Gesamtbetrag der Auftragspositionen',
        'shipping_type'                  => 'Lieferart',
        'payment_method'                 => 'Zahlungsart',
        'is_user_show'                   => 'Status dem Benutzer anzeigen',
        'user_status'                    => 'Für den Benutzer wird der Status wie folgt angezeigt:',
        'color'                          => 'Farbe',
        'gateway_id'                     => 'ZahlungsGateway',
        'gateway_currency'               => 'Gateway Währung',
        'before_status_id'               => 'Bestellstatus vor der Zahlung',
        'after_status_id'                => 'Auftragsstatus nach Zahlungseingang',
        'cancel_status_id'               => 'Auftragsstatus nach Zahlungsabbruch',
        'fail_status_id'                 => 'Bestellstatus nach Zahlungsausfall/Fehler',
        'transaction_id'                 => 'TransaktionsID',
        'payment_token'                  => 'ZahlungsToken',
        'payment_data'                   => 'Daten, die an das ZahlungsGateway gesendet wurden.',
        'payment_response'               => 'Daten, die vom ZahlungsGateway empfangen wurden.',
        'send_purchase_request'          => 'Senden der Anfrage an das Zahlungsportal bei der Auftragserstellung',
        'gateway_field_value'            => 'Liefert den Wert des ":field"-Feldes vom Wert des Auftragseigenschaftenfeldes.',
        'promo_mechanism'                => 'Promo-Mechanismus',
        'priority_description'           => 'Je <strong>höher</strong> die Priorität, umso <strong>früher</strong> wird der Rabatt angewendet.',
        'discount_value'                 => 'Rabattwert',
        'discount_type'                  => 'Rabatttyp',
        'discount_type_fixed'            => 'Fester Betrag',
        'discount_type_percent'          => 'Prozentuell',
        'final_discount'                 => 'Endrabatt',
        'final_discount_description'     => 'Der endgültige Rabatt <strong>blockiert den Effekt</strong> anderer Rabatte mit geringerer Priorität. Andernfalls werden Rabatte mit <strong>niedriger</strong> Priorität <strong>angewendet</strong>.',
        'order_discount_list'            => 'Liste der verfügbaren Rabatte',
        'manager'                        => 'Manager',
        'task_date'                      => 'Benachrichtigungsdatum',
        'active_task'                    => 'Aktive Aufgaben',
        'completed_task'                 => 'Erledigte Aufgaben',
        'task_mail_template'             => 'Mailvorlage für Benachrichtigung',
        'task_mail_template_description' => 'Wenn die Mailvorlage nicht ausgewählt ist, wird die Benachrichtigung nicht gesendet.',
        'notification_sent'              => 'Benachrichtigung versendet',

        'order_discount_log_position_total_price' => 'Liste der angewandten Rabatte (Position Gesamtpreis)',
        'order_discount_log_sipping_price'        => 'Liste der angewandten Rabatte (Reduziert den Gesamtpreis)',
        'order_discount_log_total_price'          => 'Liste der angewandten Rabatte (Bestellung Gesamtpreis)',

        'name'        => 'Name',
        'last_name'   => 'Last name',
        'middle_name' => 'Middle name',
    ],
    'settings'             => [
        'cart_cookie_lifetime'                 => 'Lebensdauer der Warenkorb-ID im Cookie (min.)',
        'check_offer_quantity'                 => 'Überprüfen Sie die verfügbare Menge des Produkts beim Anlegen einer Bestellung.',
        'decrement_offer_quantity'             => 'Automatische Reduzierung der verfügbaren Angebotsmenge beim Anlegen einer Bestellung.',
        'create_new_user'                      => 'Automatisches Anlegen eines neuen Benutzers beim Anlegen einer Bestellung.',
        'generate_fake_email'                  => 'Wenn Sie einen neuen Benutzer anlegen, erzeugen Sie eine "gefälschte E-Mail", wenn das E-Mail-Feld leer ist.',
        'send_email_after_creating_order'      => 'E-Mail nach dem Erstellen einer Bestellung senden',
        'creating_order_mail_template'         => 'Mail-Vorlage zur Erstellung von Aufträgen (für Benutzer)',
        'creating_order_manager_mail_template' => 'Mail-Vorlage zur Erstellung von Aufträgen (für Manager)',
        'creating_order_manager_email_list'    => 'E-Mail-Liste für Manager',

        'order_create_email' => 'E-Mail zum Versenden von E-Mails beim Erstellen einer Bestellung',
    ],
    'menu'                 => [
        'orders'                  => 'Bestellungen',
        'statuses'                => 'Status',
        'payment_methods'         => 'Zahlungsarten',
        'shipping_types'          => 'Lieferarten',
        'order_property'          => 'Zusätzliche Eigenschaften für Bestellung',
        'order_position_property' => 'Zusätzliche Eigenschaften der Bestellposition',
        'promo_mechanism'         => 'Werbemechanismus',
    ],
    'order'                => [
        'name'       => 'Bestellung',
        'list_title' => 'Bestellliste',
    ],
    'buyer'                => [
        'name'       => 'Besteller',
        'list_title' => 'Bestellerliste',
    ],
    'order_position'       => [
        'name'       => 'Position',
        'list_title' => 'Positionen',
    ],
    'status'               => [
        'name'       => 'Status',
        'list_title' => 'Status',
    ],
    'payment_method'       => [
        'name'       => 'Zahlungsarten',
        'list_title' => 'Zahlungsarten',
    ],
    'shipping_type'        => [
        'name'       => 'Lieferarten',
        'list_title' => 'Lieferarten',
    ],
    'order_property'       => [
        'name'       => 'Eigenschaften',
        'list_title' => 'Eigenschaftenliste',
    ],
    'task'                 => [
        'name'       => 'Aufgaben',
        'list_title' => 'Aufgabenliste',
    ],
    'promo_mechanism'      => [
        'name'                            => 'Werbemechanismus',
        'list_title'                      => 'Werbemechanismus Liste',
        'amount_description'              => 'Der Rabatt wird gewährt, wenn der Betrag größer oder gleich dem folgenden ist',
        'offer_limit'                     => 'Angebotsmenge, zu der der Rabatt gewährt wird.',
        'offer_limit_description'         => 'Der Rabatt wird gewährt, wenn die Angebotsmenge größer oder gleich der folgenden ist',
        'position_limit'                  => 'Positionslimit, bei dem der Rabatt angewendet wird.',
        'position_limit_description'      => 'Der Rabatt wird angewendet, wenn die Anzahl der Positionen größer oder gleich der Anzahl der Positionen ist.',
        'quantity_limit'                  => 'Mengenbegrenzung, für die der Rabatt gewährt wird.',
        'quantity_limit_description'      => 'Wenn Sie den Wert = 1 und den Rabattwert = 100% einstellen, wird der Rabatt auf eine Einheit angewendet. Wenn Sie den Wert = 0 einstellen, wird der Rabatt auf alle Einheiten angewendet.',
        'quantity_limit_from'             => 'Mengengrenze, bei der der Rabatt wiederholt wird.',
        'quantity_limit_from_description' => 'Wenn Sie den Wert = 3, den Wert der Mengenbegrenzung, für die der Rabatt angewendet wird, = 1 und den Rabattwert = 100% einstellen, dann wird der Rabatt auf eine Einheit angewendet und alle 3 Angebote wiederholt (3 zum Preis von 2). Wenn der Wert = 0 ist, wird der Wert ignoriert.',
    ],
    'permission'           => [
        'order'           => 'Bestellungen verwalten',
        'status'          => 'Statusliste verwalten',
        'payment_type'    => 'Zahlungsarten verwalten',
        'delivery_type'   => 'Lieferarten verwalten',
        'property'        => 'Verwalten Sie zusätzliche Eigenschaften von Bestellungen',
        'promo_mechanism' => 'Promo-Mechanismus verwalten',
    ],
    'label'                => [
        'order'   => 'Bestellung',
        'product' => 'Produkt',
        'offer'   => 'Angebot',
    ],
    'promo_mechanism_type' => [
        'without_condition_discount_position'                         => 'Rabatt auf den <strong>Positionspreis</strong> ohne Konditionen',
        'without_condition_discount_position_description'             => 'Der Rabatt auf den Preis der <strong>Position</strong> wird <strong>angewandt, ohne irgendwelche Bedingungen zu überprüfen</strong>. Zum Beispiel: Kann bei der Anwendung eines Coupons verwendet werden.',
        'without_condition_discount_min_price'                        => 'Rabatt auf den <strong>Positionspreis mit Minipreis</strong> ohne Konditionen',
        'without_condition_discount_min_price_description'            => 'Der Rabatt auf den Preis der <strong>Position mit min. Preis</strong> wird angewendet <strong>ohne Prüfung aller Bedingungen</strong>. Zum Beispiel: Kann bei der Anwendung eines Coupons verwendet werden.',
        'without_condition_discount_position_total_price'             => 'Rabatt auf den <strong>Gesamtpreis</strong> von Positionen ohne Konditionen',
        'without_condition_discount_position_total_price_description' => 'Der Rabatt auf den <strong>Gesamtpreis der Positionen</strong> wird <strong>ohne Überprüfung der Bedingungen</strong> angewendet. Zum Beispiel: Kann bei der Anwendung eines Coupons verwendet werden.',
        'without_condition_discount_shipping_price'                   => 'Rabatt auf den <strong>Lieferpreis</strong> ohne Bedingungen',
        'without_condition_discount_shipping_price_description'       => 'Der Rabatt auf den <strong>Versandpreis</strong> wird <strong>ohne Prüfung der Bedingungen</strong> gewährt. Zum Beispiel: Kann bei der Anwendung eines Coupons verwendet werden.',
        'without_condition_discount_total_price'                      => 'Rabatt auf den <strong>Gesamtpreis</strong> der Bestellung ohne Konditionen',
        'without_condition_discount_total_price_description'          => 'Der Rabatt auf den <strong>Gesamtpreis</strong> der Bestellung wird <strong>ohne Überprüfung aller Bedingungen</strong> angewendet. Zum Beispiel: Kann bei der Anwendung eines Coupons verwendet werden.',

        'position_total_price_greater_discount_shipping_price'             => 'Rabatt auf den <strong>Lieferpreis</strong>, wenn der Gesamtpreis der Position größer als "XX" ist.',
        'position_total_price_greater_discount_shipping_price_description' => 'Der Rabatt auf den <strong>Lieferpreis</strong> wird angewendet <strong>wenn der Gesamtpreis der Position größer als der eingestellte Wert</strong> ist. Zum Beispiel: Der Rabatt beträgt 5%, wenn der Gesamtpreis der Position >= 50$ ist.',
        'position_total_price_greater_discount_total_price'                => 'Rabatt auf den <strong>Gesamtpreis</strong> der Bestellung, wenn der Gesamtpreis der Position größer als "XX" ist.',
        'position_total_price_greater_discount_total_price_description'    => 'Der Rabatt auf den <strong>Gesamtpreis</strong> der Bestellung wird angewendet <strong>wenn der Gesamtpreis der Position größer als</strong> ist. Zum Beispiel: Der Rabatt beträgt 5%, wenn der Gesamtpreis der Position >= 50$ ist.',

        'offer_quantity_greater_discount_position'                         => 'Rabatt auf den <strong>Positionspreis</strong>, wenn die Gesamtmenge eines Angebots in der Order größer als "XX" ist.',
        'offer_quantity_greater_discount_position_description'             => 'Der Rabatt auf den Preis der <strong>Position</strong> wird <strong>angewendet, wenn die Gesamtmenge eines Angebots in der Bestellung größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge des Angebots "T-Shirt Größe 52" >= 3 ist.',
        'offer_quantity_greater_discount_min_price'                        => 'Rabatt auf die <strong>Position mit Minipreis</strong>, wenn die Gesamtmenge eines Angebots in der Bestellung größer als "XX" ist.',
        'offer_quantity_greater_discount_min_price_description'            => 'Der Rabatt auf den Preis der <strong>Position mit min. Preis</strong> wird <strong>angewendet, wenn die Gesamtmenge eines Angebots in der Order größer ist als der Sollwert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge des Angebots "T-Shirt Größe 52" >= 3 ist.',
        'offer_quantity_greater_discount_position_total_price'             => 'Rabatt auf den <strong>Gesamtpreis der Positionen</strong>, wenn die Gesamtmenge eines Angebots in der Bestellung größer als "XX" ist.',
        'offer_quantity_greater_discount_position_total_price_description' => 'Der Rabatt auf den <strong>Gesamtpreis der Positionen</strong> Liste wird angewendet <strong>wenn die Gesamtmenge eines Angebots in der Bestellung größer ist als der Sollwert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge des Angebots "T-Shirt Größe 52" >= 3 ist.',
        'offer_quantity_greater_discount_shipping_price'                   => 'Rabatt auf den <strong>Lieferpreis</strong>, wenn die Gesamtmenge eines Angebots in der Bestellung größer als "XX" ist.',
        'offer_quantity_greater_discount_shipping_price_description'       => 'Der Rabatt auf den <strong>Versandpreis</strong> wird angewendet <strong>wenn die Gesamtmenge eines Angebots in der Bestellung größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge des Angebots "T-Shirt Größe 52" >= 3 ist.',
        'offer_quantity_greater_discount_total_price'                      => 'Rabatt auf den <strong>Bestellgesamtpreis</strong>, wenn die Gesamtmenge eines Angebots in der Bestellung größer als "XX" ist.',
        'offer_quantity_greater_discount_total_price_description'          => 'Der Rabatt auf den <strong>Gesamtpreis</strong> des Auftrags wird angewendet <strong>wenn die Gesamtmenge eines Angebots im Auftrag größer ist als der Sollwert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge des Angebots "T-Shirt Größe 52" >= 3 ist.',

        'offer_total_quantity_greater_discount_position'                         => 'Rabatt auf den <strong>Positionspreis</strong>, wenn die Gesamtmenge der Angebote in der Order größer als "XX" ist.',
        'offer_total_quantity_greater_discount_position_description'             => 'Der Rabatt auf den Preis der <strong>Position</strong> wird <strong> angewendet, wenn die Gesamtmenge der Angebote in der Bestellung größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge der Angebote "T-Shirt Größe 52" (Menge = 2) + "T-Shirt Größe 56" (Menge = 2) = 4 >= 3 ist.',
        'offer_total_quantity_greater_discount_min_price'                        => 'Rabatt auf die <strong>Position mit Minipreis</strong>, wenn die Gesamtmenge der Angebote in der Order größer als "XX" ist.',
        'offer_total_quantity_greater_discount_min_price_description'            => 'Der Rabatt auf den Preis der <strong>Position mit min. Preis</strong> wird <strong>angewendet, wenn die Gesamtmenge der Angebote in der Order größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge der Angebote "T-Shirt Größe 52" (Menge = 2) + "T-Shirt Größe 56" (Menge = 2) = 4 >= 3 ist.',
        'offer_total_quantity_greater_discount_position_total_price'             => 'Rabatt auf den <strong>Gesamtpreis der Positionen</strong>, wenn die Gesamtmenge der Angebote in der Order größer als "XX" ist.',
        'offer_total_quantity_greater_discount_position_total_price_description' => 'Der Rabatt auf den <strong>Gesamtpreis der Positionen</strong> Liste wird angewendet <strong>wenn die Gesamtmenge der Angebote in der Order größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge der Angebote "T-Shirt Größe 52" (Menge = 2) + "T-Shirt Größe 56" (Menge = 2) = 4 >= 3 ist.',
        'offer_total_quantity_greater_discount_shipping_price'                   => 'Rabatt auf den <strong>Lieferpreis</strong>, wenn die Gesamtmenge der Angebote in der Bestellung größer als "XX" ist.',
        'offer_total_quantity_greater_discount_shipping_price_description'       => 'Der Rabatt auf den <strong>Versandpreis</strong> wird angewendet <strong>wenn die Gesamtmenge der Angebote in der Bestellung größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge der Angebote "T-Shirt Größe 52" (Menge = 2) + "T-Shirt Größe 56" (Menge = 2) = 4 >= 3 ist.',
        'offer_total_quantity_greater_discount_total_price'                      => 'Rabatt auf den <strong>Bestellgesamtpreis</strong>, wenn die Gesamtmenge der Angebote in der Bestellung größer als "XX" ist.',
        'offer_total_quantity_greater_discount_total_price_description'          => 'Der Rabatt auf den <strong>Gesamtpreis</strong> des Auftrags wird angewendet <strong>wenn die Gesamtmenge der Angebote im Auftrag größer ist als der Sollwert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Gesamtmenge der Angebote "T-Shirt Größe 52" (Menge = 2) + "T-Shirt Größe 56" (Menge = 2) = 4 >= 3 ist.',

        'position_count_greater_discount_position'                         => 'Rabatt auf den <strong>Positionspreis</strong>, wenn die Positionszahl in der Order größer als "XX" ist.',
        'position_count_greater_discount_position_description'             => 'Der Rabatt auf den Preis der <strong>Position</strong> wird <strong>angewendet, wenn die Positionszahl in der Order größer als der eingestellte Wert</strong> ist. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Positionszahl >= 3 ist.',
        'position_count_greater_discount_min_price'                        => 'Rabatt auf die <strong>Position mit min. Preis</strong>, wenn die Positionszahl in der Order größer als "XX" ist.',
        'position_count_greater_discount_min_price_description'            => 'Der Rabatt auf den Preis der <strong>Position mit min. Preis</strong> wird <strong>angewendet, wenn die Positionszahl in der Order größer als der eingestellte Wert</strong> ist. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Positionszahl >= 3 ist.',
        'position_count_greater_discount_position_total_price'             => 'Rabatt auf den <strong>Gesamtpreis der Positionen</strong>, wenn die Positionszahl in der Order größer als "XX" ist.',
        'position_count_greater_discount_position_total_price_description' => 'Der Rabatt auf den <strong>Gesamtpreis der Positionen</strong> Liste wird angewendet <strong>wenn die Positionszahl in der Order größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Positionszahl >= 3 ist.',
        'position_count_greater_discount_shipping_price'                   => 'Rabatt auf den <strong>Lieferpreis</strong>, wenn die Positionszahl in der Order größer als "XX" ist.',
        'position_count_greater_discount_shipping_price_description'       => 'Der Rabatt auf den <strong>Versandpreis</strong> wird angewendet <strong>wenn die Positionszahl in der Order größer ist als der eingestellte Wert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Positionszahl >= 3 ist.',
        'position_count_greater_discount_total_price'                      => 'Rabatt auf den <strong>Auftragsgesamtpreis</strong>, wenn die Positionszahl in der Order größer als "XX" ist.',
        'position_count_greater_discount_total_price_description'          => 'Der Rabatt auf den <strong>Gesamtpreis</strong> der Order wird angewendet <strong>wenn die Positionszahl in der Order größer ist als der Sollwert</strong>. Zum Beispiel: Der Rabatt beträgt 5%, wenn die Positionszahl >= 3 ist.',
    ],
];
