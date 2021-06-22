using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Interpreter
{
    class Context
    {
        Pints pint = new Pints();
        Quarts quart = new Quarts();
        Gallons gallon = new Gallons();
        public static string input;
        public string convertResponse { get; private set; }
        public static string fromConvert { get; private set; }
        public static string toConvert { get; private set; }
        public string quantity { get; private set; }

        string[] partsofQues;

        public Context()
        {
            
        }
        public void InterpretConversion()
        {
            partsofQues = input.Split(' ');
            fromConvert = partsofQues[1].ToUpper();
            toConvert = partsofQues[3].ToUpper();
            convertResponse = partsofQues[0] + " " + partsofQues[1] + " equals " + getdata() + " "+ toConvert.ToLower();
        } 
        private string getdata()
        {
            switch (fromConvert)
            {
                case "PINTS":
                    if (toConvert == "QUARTS") { return pint.quarts(Convert.ToDouble(partsofQues[0])); }
                    else if (toConvert == "PINTS") { return pint.pints(Convert.ToDouble(partsofQues[0])); }
                    else if (toConvert == "GALLONS") { return pint.gallons(Convert.ToDouble(partsofQues[0])); }
                    break;
                case "QUARTS":
                    if (toConvert == "QUARTS") { return quart.quarts(Convert.ToDouble(partsofQues[0])); }
                    else if (toConvert == "PINTS") { return quart.pints(Convert.ToDouble(partsofQues[0])); }
                    else if (toConvert == "GALLONS") { return quart.gallons(Convert.ToDouble(partsofQues[0])); }
                    break;
                case "GALLONS":
                    if (toConvert == "QUARTS") { return gallon.quarts(Convert.ToDouble(partsofQues[0])); }
                    else if (toConvert == "PINTS") { return gallon.pints(Convert.ToDouble(partsofQues[0])); }
                    else if (toConvert == "GALLONS") { return gallon.gallons(Convert.ToDouble(partsofQues[0])); }
                    break;
            }
            return "";
        }
    }
}
