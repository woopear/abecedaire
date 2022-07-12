import './bootstrap';
import DarkMode from'./darkmode';

// when loading check mode dark with device
//DarkMode.whenLoadingAddModeDarkIfExist()

// when loading check mode dark without device
DarkMode.whenLoadingAddModeDarkIfExist(false)

// switch mode dark  
DarkMode.switchModeDark()