using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Bridge
{
    class GreenAPI : ColorAPI
    {
        public override string FillColor()
        {
            return "Green Fill";
        }

        public override string StrokeColor()
        {
            return "Green Stroke";
        }
        public override string ToString()
        {
            return string.Format("{0}, {1}", FillColor(), StrokeColor());
        }
    }
}
