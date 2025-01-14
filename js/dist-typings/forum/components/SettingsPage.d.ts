/**
 * The `SettingsPage` component displays the user's settings control panel, in
 * the context of their user profile.
 */
export default class SettingsPage extends UserPage {
    /**
     * Build an item list for the user's settings controls.
     *
     * @return {ItemList}
     */
    settingsItems(): ItemList<any>;
    /**
     * Build an item list for the user's account settings.
     *
     * @return {ItemList}
     */
    accountItems(): ItemList<any>;
    /**
     * Build an item list for the user's notification settings.
     *
     * @return {ItemList}
     */
    notificationsItems(): ItemList<any>;
    /**
     * Build an item list for the user's privacy settings.
     *
     * @return {ItemList}
     */
    privacyItems(): ItemList<any>;
    discloseOnlineLoading: boolean | undefined;
}
import UserPage from "./UserPage";
import ItemList from "../../common/utils/ItemList";
