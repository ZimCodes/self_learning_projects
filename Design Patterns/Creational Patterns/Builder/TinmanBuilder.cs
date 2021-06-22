using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    class TinmanBuilder : RobotBuilder
    {
        public override void buildRobotArms()
        {
            robot.robotArms = "Tin Arms";
        }

        public override void buildRobotHead()
        {
            robot.robotHead = "Tin Head";
        }

        public override void buildRobotLegs()
        {
            robot.robotLegs = "Tin Legs";
        }

        public override void buildRobotTorso()
        {
            robot.robotTorso= "Tin Torso";
        }
    }
}
