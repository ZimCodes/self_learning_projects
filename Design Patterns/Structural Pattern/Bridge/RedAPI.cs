using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Bridge
{
    class RedAPI:ColorAPI
    {
        public override string FillColor()
        {
            return "Red Fill"; 
        }
        public override string StrokeColor()
        {
            return "Red Stroke";
        }
        public override string ToString()
        {
            return string.Format("{0}, {1}", FillColor(),StrokeColor());
        }
    }
}
